<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengumuman extends CI_Controller{

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
		$data['pengumuman'] = $this->model_pengumuman->tampil_pengumuman()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pengumuman', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_pengumuman()
	{
		$created_by		    = $this->session->userdata('nama');
		$id_pengumuman	  = $this->input->post('id_pengumuman');
		$judul						= $this->input->post('judul');
		$deskripsi				= $this->input->post('deskripsi');
		$status						= $this->input->post('status');
		$gambar						= $_FILES['gambar']['name'];
		if ($gambar ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'pdf|jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
		
		$data = array(
			'id_pengumuman' => $id_pengumuman, 
			'judul' 			   => $judul,
			'deskripsi'      => $deskripsi,
			'status'				 => $status,
			'gambar' 				 => $gambar,
			'created_date'   => date('Y-m-d H:i:s'),
			'created_by'		 => $created_by
		);

		$this->model_pengumuman->tambah_pengumuman($data, 't_pengumuman');
		$this->session->set_flashdata('berhasilTambahPengumuman','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pengumuman');
	}

	public function edit_pengumuman()
	{
		$id_pengumuman	= $this->input->post('id_pengumuman');
		$judul 					= $this->input->post('judul');
		$deskripsi 	    = $this->input->post('deskripsi');
		$status 			  = $this->input->post('status');
		$gambar					=  $_FILES['gambar']['name'];
		
		if ($gambar ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'pdf|jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		if ($gambar != null) {
			$data = array(
			'id_pengumuman'  => $id_pengumuman, 
			'judul' 			   => $judul,
			'deskripsi'      => $deskripsi,
			'status'				 => $status,
			'gambar' 				 => $gambar
			);
		}else{
			$data = array(
			'id_pengumuman'  => $id_pengumuman, 
			'judul' 			   => $judul,
			'deskripsi'      => $deskripsi,
			'status'				 => $status
			);
		}

		$this->db->where('id_pengumuman', $id_pengumuman);
		$this->db->update('t_pengumuman', $data);
		$this->session->set_flashdata('berhasilEditPengumuman','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diubah!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pengumuman');

	}

	public function hapus_pengumuman()
	{
		$id_pengumuman 	= $this->input->post('id_pengumuman');

		$where = array('id_pengumuman' => $id_pengumuman);
      $this->db->delete('t_pengumuman', $where);
			$this->session->set_flashdata('berhasilHapusPengumuman','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_pengumuman');
	}


}
?>