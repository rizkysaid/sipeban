<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian extends CI_Controller{

	public function __construct(){

        parent ::__construct();

        $this->load->model('M_rincian'); 

    }

    public function index($id)
    {
        $id = $this->uri->segment(3);
        $data = array(
            'rincian' => $this->M_rincian->get_rincian($id),
            'ket'     => $this->M_rincian->get_keterangan($id),
            'total'   => $this->M_rincian->get_total($id)
        );

        $this->load->view('rincian/index', $data);
    }

    public function tambah($id)
    {
        $id = $this->uri->segment(3);
        $data = array(
            'desa' => $this->M_rincian->getDesa()
        );
        
        $this->load->view('rincian/form_tambah', $data);
    }

    public function simpan()
    {
        $data = array(
            'id_penyaluran' => $this->input->post("id_penyaluran"),
            'nama_rincian'  => $this->input->post("nama_rincian"),
            'nominal'       => $this->input->post("nominal"),
            'created_at'    => date('Y-m-d H:i:s')
        );

        $this->M_rincian->simpan($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']); //redirect to current page
    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);
        
        $data = array(
            'rincian' => $this->M_rincian->edit($id)
        );

        $this->load->view('rincian/form_edit', $data);
    }

    public function update()
    {
        $id['id_rincian'] = $this->input->post("id_rincian");
        $location = $this->input->post("location");
        $data = array(
            'id_rincian'    => $this->input->post("id_rincian"),
            'nama_rincian'  => $this->input->post("nama_rincian"),
            'nominal'       => $this->input->post("nominal"),
            'created_at'    => date('Y-m-d H:i:s')
        );
       $this->M_rincian->update($data, $id);
       redirect($location);
    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->M_rincian->hapus($id);
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function laporan(){
    	$this->load->view('dashboard_laporan');
    }


    //Membuat laporan
    public function printLaporan(){
    	$data = array(
            'rincian' => $this->M_rincian->get_all(),
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-rincian.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
    }

}