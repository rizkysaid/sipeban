<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class M_petugas extends CI_Model{

	public function get_all()
    {
        $query = $this->db->select('*')
                 ->from('tb_petugas as p')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_petugas", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {
         $query = $this->db->select("*")
                 ->from('tb_petugas')
                 ->where('id_petugas', $id)
                 ->get();

        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_petugas", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {
    	$this->db->where(array(
    		'id_petugas' => $id
    	));   
    	$this->db->delete('tb_petugas');

        $this->db->where(array(
            'id_petugas' => $id
        ));
        $this->db->delete('tb_petugas');
    }

    public function get_data_print($id)
    {
        $query = $this->db->select('*')
                 ->from('tb_petugas as p')
                 ->where('p.id_petugas', $id)
                 ->get();
        if($query){
            return $query->row();
        }else{
            return false;
        }
    }
}