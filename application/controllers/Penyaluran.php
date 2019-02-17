<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyaluran extends CI_Controller{

	public function __construct(){

        parent ::__construct();

        $this->load->model('M_penyaluran'); 
        $this->load->model('M_rincian'); 

    }

    public function index()
    {
        $data = array(
            'penyaluran' => $this->M_penyaluran->get_all()
        );

        $this->load->view('penyaluran/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'desa'      => $this->M_penyaluran->getDesa(),
            'tahap'     => $this->M_penyaluran->getTahap()
        );
        
        $this->load->view('penyaluran/form_tambah', $data);
    }

    public function simpan()
    {
        
        $data = array(

            'id_desa'       => $this->input->post("id_desa"),
            'nama_kegiatan' => $this->input->post("nama_kegiatan"),
            'no_rek' => $this->input->post("no_rek"),
            'id_tahap'      => $this->input->post('id_tahap'),
            'tanggal'       => implode("-", array_reverse(explode("/", $this->input->post("tanggal")))),
            'created_at'    => date('Y-m-d H:i:s')
        );

        $this->M_penyaluran->simpan($data);
        redirect('penyaluran/index');
    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);

        $data = array(
            'penyaluran' => $this->M_penyaluran->edit($id),
            'desa' => $this->M_penyaluran->getDesa(),
            'tahap'     => $this->M_penyaluran->getTahap()
        );

        $this->load->view('penyaluran/form_edit', $data);

    }

    public function update()
    {
        $id['id_penyaluran'] = $this->input->post("id_penyaluran");
        $data = array(
            'id_desa'       => $this->input->post("id_desa"),
            'nama_kegiatan' => $this->input->post("nama_kegiatan"),
            'no_rek' => $this->input->post("no_rek"),
            'id_tahap'      => $this->input->post('id_tahap'),
            'tanggal'       => implode("-", array_reverse(explode("/", $this->input->post("tanggal")))),
            'created_at'    => date('Y-m-d H:i:s')
        );

        $this->M_penyaluran->update($data, $id);

        redirect('penyaluran/index');

    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->M_penyaluran->hapus($id);
        
        redirect(site_url('penyaluran/index'));
  
    }

    //Membuat laporan
    public function get_data_print($id){
        $id = $this->uri->segment(3);        
    	$data = array(
            'penyaluran' => $this->M_penyaluran->get_data_print($id),
            'rincian'    => $this->M_rincian->get_rincian($id),
            'thn'        => $this->M_penyaluran->get_tahun($id),
            'total'      => $this->M_rincian->get_Total($id)
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('F4', 'potrait');
        $this->pdf->filename = "surat_penyaluran_ADD.pdf";
        $this->load->view('penyaluran/surat_penyaluran_ADD', $data);
    }

}