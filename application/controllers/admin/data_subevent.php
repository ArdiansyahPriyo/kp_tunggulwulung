<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_subevent extends CI_Controller{
	
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
		$data['subevent']      = $this->model_subevent->tampil_data();
		$data['list_event']    = $this->model_subevent->list_nama_event();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/subevent', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_subevent()
	{
		$id_event							= $this->input->post('id_event');
		$subevent							= $this->input->post('subevent');
		$tanggal_pelaksanaan	= $this->input->post('tanggal_pelaksanaan');
		$tmmulai							= $this->input->post('tmmulai');
		$tmselesai						= $this->input->post('tmselesai');
		$jenis_hadiah					= $this->input->post('jenis_hadiah');
		$harga								= $this->input->post('harga');
		$nominal							= $this->input->post('nominal');
		$stok  								= $this->input->post('stok');
		$jumlah_lapak					= $this->input->post('jumlah_lapak');
		$mulai								= $this->input->post('mulai');
		$akhir								= $this->input->post('akhir');
		$file						      = $_FILES['file']['name'];
		if ($file ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'pdf|jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('file')){
				echo "File gagal diupload";
			}else{
				$file = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id_event' 						=> $id_event, 
			'subevent' 						=> $subevent,
			'tanggal_pelaksanaan' => $tanggal_pelaksanaan,
			'jenis_hadiah'				=> $jenis_hadiah,
			'jam_mulai' 						=> $tmmulai,
			'jam_selesai'						=> $tmselesai,
			'harga' 							=> preg_replace("/[^0-9]/","",$harga),
			'nominal' 						=> preg_replace("/[^0-9]/","",$nominal),
			'stok'								=> $stok,
			'jumlah_lapak' 				=> $jumlah_lapak,
			'mulai' 							=> $mulai, 
			'akhir' 							=> $akhir,
			'file'								=> $file
		);

		$this->model_subevent->tambah_subevent($data, 't_subevent');
		$this->session->set_flashdata('berhasilTambahSubEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_subevent');
	}

	public function edit_subevent()
	{
		$id_subevent	 				= $this->input->post('id_subevent');
		$subevent 						= $this->input->post('subevent');
		$tanggal_pelaksanaan 	= $this->input->post('tanggal_pelaksanaan');
		$jenis_hadiah					= $this->input->post('jenis_hadiah');
		$harga								= $this->input->post('harga');
		$nominal							= $this->input->post('nominal');
		$jumlah_lapak					= $this->input->post('jumlah_lapak');
		$stok 								= $this->input->post('stok');
		$mulai								= $this->input->post('mulai');
		$akhir  							= $this->input->post('akhir');
		$file					        =  $_FILES['file']['name'];
		if ($file ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'pdf|jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('file')){
				echo "File gagal diupload";
			}else{
				$file = $this->upload->data('file_name');
			}
		}

		if ($file != null) {
			$data = array(
			'id_subevent' 		     => $id_subevent,
			'subevent' 		    		 => $subevent, 
			'tanggal_pelaksanaan'  => $tanggal_pelaksanaan,
			'jenis_hadiah'				 => $jenis_hadiah,
			'harga' 							 => preg_replace("/[^0-9]/","",$harga),
			'nominal' 						 => preg_replace("/[^0-9]/","",$nominal),
			'jumlah_lapak'			   => $jumlah_lapak,
			'stok'                 => $stok,
			'mulai'		             => $mulai,
			'akhir'		             => $akhir,
			'file'								 => $file
			);
		}else{
			$data = array(
			'id_subevent' 		     => $id_subevent,
			'subevent' 		    		 => $subevent, 
			'tanggal_pelaksanaan'  => $tanggal_pelaksanaan,
			'jenis_hadiah'				 => $jenis_hadiah,
			'harga' 							 => preg_replace("/[^0-9]/","",$harga),
			'nominal' 						 => preg_replace("/[^0-9]/","",$nominal),
			'jumlah_lapak'			   => $jumlah_lapak,
			'stok'                 => $stok,
			'mulai'		             => $mulai,
			'akhir'		             => $akhir
			);
		}

		

		$this->db->where('id_subevent', $id_subevent);
		$this->db->update('t_subevent', $data);
		$this->session->set_flashdata('berhasilEditSubEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diubah!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_subevent');

	}

	public function hapus_subevent()
	{
		$id_subevent 	= $this->input->post('id_subevent');

		$where = array('id_subevent' => $id_subevent);
      $this->db->delete('t_subevent', $where);
			$this->session->set_flashdata('berhasilHapusSubEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_subevent');
	}

}
?>