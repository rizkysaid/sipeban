<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class M_rincian extends CI_Model{

    public function get_keterangan($id){
        $ket = $this->db->select('*')
                        ->from('tb_penyaluran as p')
                        ->join('tb_desa as d', 'p.id_desa = d.id_desa')
                        ->where('p.id_penyaluran', $id)
                        ->get();
        return $ket->row();
    }

	public function get_rincian($id)
    {
        $query = $this->db->select('*')
                 ->from('tb_rincian as r')
                 ->join('tb_penyaluran as p', 'r.id_penyaluran = p.id_penyaluran')
                 ->where('p.id_penyaluran', $id)
                 ->get();
        return $query->result();
    }

    public function get_total($id){
        $query = $this->db->select('sum(nominal) as total')
                        ->from('tb_rincian')
                        ->where('id_penyaluran', $id)
                        ->get();
        return $query->row();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_rincian", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {

         $query = $this->db->select("*")
                 ->from('tb_rincian as r')
                 ->join('tb_penyaluran as p', 'r.id_penyaluran = p.id_penyaluran')
                 ->where('id_rincian', $id)
                 ->get();

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_rincian", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {
    	$this->db->where(array(
    		'id_rincian' => $id
    	));
    	$this->db->delete('tb_rincian');
    }

}