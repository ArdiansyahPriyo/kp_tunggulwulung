<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_laporan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('hak_akses') != 'admin'){
			$this->session->set_flashdata('harus_login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Anda belum login, Silahkan login !
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
			redirect('login');
		}
	}

	public function index()
	{
		$data['laporan_pengeluaran'] = $this->model_pengeluaran->total_pengeluaran();
		$data['laporan_penjualan'] = $this->model_penjualan->total_penjualan();
		$data['laporan_ikan'] = $this->model_pengeluaran->total_ikan();
		// echo "<pre>";
  // print_r($data);exit;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan', $data);
		$this->load->view('templates_admin/footer');
	}
}
?>