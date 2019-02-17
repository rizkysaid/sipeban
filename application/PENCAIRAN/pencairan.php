<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencairan extends CI_Controller{

	public function __construct(){

        parent ::__construct();

        $this->load->model('M_pencairan'); 
        $this->load->model('M_rincian'); 

    }

    public function index()
    {
        $data = array(
            'pencairan' => $this->M_pencairan->get_all()
        );

        $this->load->view('pencairan/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'desa'      => $this->M_pencairan->getDesa(),
            'tahap'     => $this->M_pencairan->getTahap()
        );
        
        $this->load->view('pencairan/form_tambah', $data);
    }

    public function simpan()
    {
        
        $data = array(

            'id_desa'       => $this->input->post("id_desa"),
            'nama_kegiatan' => $this->input->post("nama_kegiatan"),
            'id_tahap'      => $this->input->post('id_tahap'),
            'tanggal'       => implode("-", array_reverse(explode("/", $this->input->post("tanggal")))),
            'created_at'    => date('Y-m-d H:i:s')
        );

        $this->M_pencairan->simpan($data);
        redirect('pencairan/index');
    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);

        $data = array(
            'pencairan' => $this->M_pencairan->edit($id),
            'desa' => $this->M_pencairan->getDesa(),
            'tahap'     => $this->M_pencairan->getTahap()
        );

        $this->load->view('pencairan/form_edit', $data);

    }

    public function update()
    {
        $id['id_pencairan'] = $this->input->post("id_pencairan");
        $data = array(
            'id_desa'       => $this->input->post("id_desa"),
            'nama_kegiatan' => $this->input->post("nama_kegiatan"),
            'id_tahap'      => $this->input->post('id_tahap'),
            'tanggal'       => implode("-", array_reverse(explode("/", $this->input->post("tanggal")))),
            'created_at'    => date('Y-m-d H:i:s')
        );

        $this->M_pencairan->update($data, $id);

        redirect('pencairan/index');

    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->M_pencairan->hapus($id);
        
        redirect(site_url('pencairan/index'));
  
    }

    //Membuat laporan
    public function get_data_print($id){
        $id = $this->uri->segment(3);        
    	$data = array(
            'pencairan' => $this->M_pencairan->get_data_print($id),
            'rincian'    => $this->M_rincian->get_rincian($id),
            'thn'        => $this->M_pencairan->get_tahun($id),
            'total'      => $this->M_rincian->get_Total($id)
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('F4', 'potrait');
        $this->pdf->filename = "surat_pencairan_ADD.pdf";
        //$this->pdf->load_view('pencairan/surat_permohonan', $data);
        $this->load->view('pencairan/surat_pencairan_ADD', $data);
    }

}