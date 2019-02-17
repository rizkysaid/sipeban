<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian1 extends CI_Controller{

	public function __construct(){

        parent ::__construct();

        $this->load->model('M_rincian1'); 

    }

    public function index($id)
    {
        $id = $this->uri->segment(3);
        $data = array(
            'rincian1' => $this->M_rincian1->get_rincian1($id),
            'ket'     => $this->M_rincian1->get_keterangan($id),
            'total'   => $this->M_rincian1->get_total($id)
        );

        $this->load->view('rincian1/index', $data);
    }

    public function tambah($id)
    {
        $id = $this->uri->segment(3);
        $data = array(
            'desa' => $this->M_rincian1->getDesa()
        );
        
        $this->load->view('rincian1/form_tambah', $data);
    }

    public function simpan()
    {
        $data = array(
            'id_penyaluran' => $this->input->post("id_penyaluran"),
            'nama_rincian1'  => $this->input->post("nama_rincian1"),
            'nominal'       => $this->input->post("nominal"),
            'created_at'    => date('Y-m-d H:i:s')
        );

        $this->M_rincian1->simpan($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']); //redirect to current page
    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);
        
        $data = array(
            'rincian1' => $this->M_rincian1->edit($id)
        );

        $this->load->view('rincian1/form_edit', $data);
    }

    public function update()
    {
        $id['id_rincian1'] = $this->input->post("id_rincian1");
        $location = $this->input->post("location");
        $data = array(
            'id_rincian1'    => $this->input->post("id_rincian1"),
            'nama_rincian1'  => $this->input->post("nama_rincian1"),
            'nominal'       => $this->input->post("nominal"),
            'created_at'    => date('Y-m-d H:i:s')
        );
       $this->M_rincian1->update($data, $id);
       redirect($location);
    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->M_rincian1->hapus($id);
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function laporan(){
    	$this->load->view('dashboard_laporan');
    }


    //Membuat laporan
    public function printLaporan(){
    	$data = array(
            'rincian1' => $this->M_rincian1->get_all(),
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-rincian1.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
    }

}