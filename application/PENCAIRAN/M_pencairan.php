<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class M_pencairan extends CI_Model{

	public function get_all()
    {
        $query = $this->db->select('*')
                 ->from('tb_pencairan as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->order_by('p.created_at', 'DESC')
                 ->get();
        return $query->result();
        
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_pencairan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {
         $query = $this->db->select("*")
                 ->from('tb_pencairan as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->where('p.id_pencairan', $id)
                 ->get();

        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_pencairan", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {
    	$this->db->where(array(
    		'id_pencairan' => $id
    	));   
    	$this->db->delete('tb_pencairan');

        $this->db->where(array(
            'id_pencairan' => $id
        ));
        $this->db->delete('tb_rincian');
    }

    public function getDesa(){
        $query = $this->db->select('*')->from('tb_desa')->get();
        return $query->result();
    }

    public function getTahap(){
        $query = $this->db->select('*')->from('tb_tahap')->get();
        return $query->result();
    }

    public function get_tahun($id){
        $query = $this->db->select("YEAR(tanggal) as tahun")
                 ->from('tb_pencairan')
                 ->where('id_pencairan', $id)
                 ->get();
        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function get_rincian($id)
    {
        $query = $this->db->select('*')
                 ->from('tb_pencairan as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_rincian as r', 'p.id_pencairan = r.id_pencairan')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->where('p.id_pencairan', $id)
                 ->get();
        if($query){
            return $query->result();
        }else{
            return false;
        }
    }    

    public function get_data_print($id)
    {
        $query = $this->db->select('*')
                 ->from('tb_pencairan as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_rincian as r', 'p.id_pencairan = r.id_pencairan')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->where('p.id_pencairan', $id)
                 ->get();
        if($query){
            return $query->row();
        }else{
            return false;
        }
    }
}