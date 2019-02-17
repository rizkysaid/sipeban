<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class M_pencairan extends CI_Model{

	public function get_all()
    {
        $query = $this->db->select('*')
                 ->from('tb_penyaluran as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->order_by('p.created_at', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_penyaluran", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {
         $query = $this->db->select("*")
                 ->from('tb_penyaluran as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->where('p.id_penyaluran', $id)
                 ->get();

        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_penyaluran", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {
    	$this->db->where(array(
    		'id_penyaluran' => $id
    	));   
    	$this->db->delete('tb_penyaluran');

        $this->db->where(array(
            'id_penyaluran' => $id
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
                 ->from('tb_penyaluran')
                 ->where('id_penyaluran', $id)
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
                 ->from('tb_penyaluran as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_rincian as r', 'p.id_penyaluran = r.id_penyaluran')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->where('p.id_penyaluran', $id)
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
                 ->from('tb_penyaluran as p')
                 ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_rincian as r', 'p.id_penyaluran = r.id_penyaluran')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                 ->where('p.id_penyaluran', $id)
                 ->get();
        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function laporan_pencairan($bln, $thn){
        $query = $this->db->select('*')
                ->from('tb_pencairan as p')
                ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                 ->join('tb_tahap as t', 'p.id_tahap = t.id_tahap')
                ->where('MONTH(p.tanggal)', $bln)
                ->where('YEAR(p.tanggal)', $thn)
                ->get();
         return $query->result();       
    }
}