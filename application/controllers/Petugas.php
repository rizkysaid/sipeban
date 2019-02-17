<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{

	public function __construct(){

        parent ::__construct();

        $this->load->model('M_petugas');

    }

    public function index()
    {
        $data = array(
            'petugas' => $this->M_petugas->get_all()
        );

        $this->load->view('petugas/index', $data);
    }

    public function tambah()
    {
        
        $this->load->view('petugas/form_tambah');
    }

    public function simpan()
    {
        
        $data = array(

            'id_petugas'    => $this->input->post("id_petugas"),
            'nip'          => $this->input->post("nip"),
            'nama' 			=> $this->input->post("nama"),
            'alamat' 		=> $this->input->post("alamat"),
            'notelp' 		=> $this->input->post("notelp"),
            'username' 		=> $this->input->post("username"),
            'keterangan' 	=> $this->input->post("keterangan")
            
        );

        $this->M_petugas->simpan($data);
        redirect('petugas/index');
    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);

        $data = array(
            'petugas' => $this->M_petugas->edit($id)
        );

        $this->load->view('petugas/form_edit', $data);
    }

    public function update()
    {
        $id['id_petugas'] = $this->input->post("id_petugas");
        $data = array(
            'id_petugas'    => $this->input->post("id_petugas"),
            'nip'          => $this->input->post("nip"),
            'nama' 			=> $this->input->post("nama"),
            'alamat' 		=> $this->input->post("alamat"),
            'notelp' 		=> $this->input->post("notelp"),
            'username' 		=> $this->input->post("username"),
            'keterangan' 	=> $this->input->post("keterangan")
        );

        $this->M_petugas->update($data, $id);

        redirect('petugas/index');

    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->M_petugas->hapus($id);
        
        redirect(site_url('petugas/index'));
  
    }

    //Membuat laporan
    public function get_data_print($id){
        $id = $this->uri->segment(3);        
    	$data = array(
            'petugas' => $this->M_petugas->get_data_print($id),
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('F4', 'landscape');
        $this->pdf->filename = "surat_petugas_ADD.pdf";
        //$this->pdf->load_view('petugas/surat_permohonan', $data);
        $this->load->view('petugas/surat_petugas_ADD', $data);
    }

}