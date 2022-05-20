<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_event extends CI_Controller{
	
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
		$data['event']          = $this->model_event->tampil_data();
		$data['list_sistem']    = $this->model_event->list_nama_sistem();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/event', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_event()
	{
		$id_sistem						= $this->input->post('id_sistem');
		$event							  = $this->input->post('event');
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
			'id_sistem' 					=> $id_sistem, 
			'event' 						  => $event,
			'tanggal_pelaksanaan' => $tanggal_pelaksanaan,
			'jenis_hadiah'				=> $jenis_hadiah,
			'jam_mulai' 					=> $tmmulai,
			'jam_selesai'					=> $tmselesai,
			'harga' 							=> preg_replace("/[^0-9]/","",$harga),
			'nominal' 						=> preg_replace("/[^0-9]/","",$nominal),
			'stok'								=> $stok,
			'jumlah_lapak' 				=> $jumlah_lapak,
			'mulai' 							=> $mulai, 
			'akhir' 							=> $akhir,
			'file'								=> $file
		);

		$this->model_event->tambah_event($data, 't_event');
		$this->session->set_flashdata('berhasilTambahEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_event');
	}

	public function edit_event()
	{
		$id_event	 				= $this->input->post('id_event');
		$event 						= $this->input->post('event');
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
			'id_event' 		     => $id_event,
			'event' 		    		 => $event, 
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
			'id_event' 		     => $id_event,
			'event' 		    		 => $event, 
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

		

		$this->db->where('id_event', $id_event);
		$this->db->update('t_event', $data);
		$this->session->set_flashdata('berhasilEditEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diubah!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_event');

	}

	public function hapus_event()
	{
		$id_event 	= $this->input->post('id_event');

		$where = array('id_event' => $id_event);
      $this->db->delete('t_event', $where);
			$this->session->set_flashdata('berhasilHapusEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_event');
	}

}
?>