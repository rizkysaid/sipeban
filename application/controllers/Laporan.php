<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

	public function __construct(){
        parent ::__construct();
        $this->load->model('M_penyaluran');
        $this->load->model('M_pencairan');
    }

	public function index(){
    	$this->load->view('laporan/index');
    }

    public function print_penyaluran(){
        $bln = $_GET['bulan'];
        $thn = $_GET['tahun'];
        $data = array(
            'penyaluran' => $this->M_penyaluran->laporan_penyaluran($bln, $thn)
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('F4', 'potrait');
        $this->pdf->filename = "laporan_penyaluran_ADD.pdf";
        $this->load->view('laporan/laporan_penyaluran_ADD', $data);
    }

    public function print_pencairan(){
        $bln = $_GET['bulan'];
        $thn = $_GET['tahun'];
        $data = array(
            'pencairan' => $this->M_pencairan->laporan_pencairan($bln, $thn)
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('F4', 'potrait');
        $this->pdf->filename = "laporan_pencairan_ADD.pdf";
        $this->load->view('laporan/laporan_pencairan_ADD', $data);
    }

}