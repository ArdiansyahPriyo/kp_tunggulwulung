<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_panitia extends CI_Controller{
	
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
		$data['subevent']      = $this->model_panitia->tampil_subevent();
		$data['list_user']     = $this->model_panitia->list_nama_user();
		$data['panitia']       = $this->model_panitia->tampil_data();

		// $id_sub 	= $this->model_panitia->tampil_subevent2();
		// $id_user  = $this->model_panitia->tampil_data2(1);

		// $var = [];
		// foreach ($id_sub as $idk){
		// 	$var[] = [
		// 		'id_subevent' => $idk->id_subevent,
		// 		'subevent' => $idk->subevent,
		// 		'user' => $this->model_panitia->tampil_data2($idk->id_subevent)
		// 	];
		// }
		// $data['slolo'] = $var;

		// echo "<pre>";
		// print_r($data);exit;

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/panitia', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_panitia()
	{
		$created_by		  = $this->session->userdata('nama');
		$id_user				= $this->input->post('id_user');
		$id_subevent		= $this->input->post('id_subevent');


		$sql = $this->db->query("SELECT id_user FROM t_panitia where id_user='$id_user' AND id_subevent='$id_subevent'");	
		$cek_user = $sql->num_rows();
		if ( $cek_user > 0 ) {
			$this->session->set_flashdata('panitiaSudahAda','<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-times-circle"></i>
	  				Gagal, Data panitia sudah ada!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}else{
			$data = array(
				'id_user' 	      => $id_user,
				'id_subevent' 	  => $id_subevent, 
				'created_date'	  => date('Y-m-d H:i:s'),
				'created_by'	    => $created_by
			);

			$this->model_panitia->tambah_panitia($data, 't_panitia');
			$this->session->set_flashdata('berhasilTambahPanitia','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('admin/data_panitia');
		}
	}

	// public function hapus_panitia()
	// {
	// 	$id_panitia 	= $this->input->post('id_panitia');

	// 	$where = array('id_panitia' => $id_panitia);
 //    $this->db->delete('t_panitia', $where);
	// 	$this->session->set_flashdata('berhasilHapusPanitia','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	// 			Data berhasil dihapus!
	//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	//     <span aria-hidden="true">&times;</span>
	//   </button>
	//   </div>');
	// 	header('Location: ' . $_SERVER['HTTP_REFERER']);
	// }

	public function hapus ($id_panitia){
		$where = array('id_panitia' => $id_panitia);
		$this->model_panitia->hapus_data($where, 't_panitia');
		$this->session->set_flashdata('berhasilHapusPanitia','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/data_panitia');
	}
}
?>