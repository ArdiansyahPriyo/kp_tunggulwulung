<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemenang extends CI_Controller{
	
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
		$data['event']         = $this->model_panitia->tampil_event();
		$data['ranking']       = $this->model_ranking->tampil_ranking3();
		// echo "<pre>";
  //   print_r($data);exit;

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pemenang', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function hapus ($id_ranking){
		$where = array('id_ranking' => $id_ranking);
		$this->model_pemenang->hapus_data($where, 't_ranking');
		$this->session->set_flashdata('berhasilHapusPanitia','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/data_pemenang');
	}

}
?>