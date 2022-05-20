<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengeluaran extends CI_Controller{

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
		$data['pengeluaran'] = $this->model_pengeluaran->tampil_pengeluaran();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pengeluaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_pengeluaran()
	{
		$nama_pengeluaran			= $this->input->post('nama_pengeluaran');
		$harga_pengeluaran		= $this->input->post('harga_pengeluaran');
		$created_by		  			= $this->session->userdata('nama');

		$data = array(
			'nama_pengeluaran' 		=> $nama_pengeluaran, 
			'harga_pengeluaran' 	=> preg_replace("/[^0-9]/","",$harga_pengeluaran),
			'created_date' 				=> date('Y-m-d H:i:s'),
			'created_by'					=> $created_by
		);

		$this->model_pengeluaran->tambah_pengeluaran($data, 't_pengeluaran');
		$this->session->set_flashdata('berhasilTambahPengeluaran','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pengeluaran');
	}


	public function edit_pengeluaran()
	{
		$id_pengeluaran	 			= $this->input->post('id_pengeluaran');
		$nama_pengeluaran 		= $this->input->post('nama_pengeluaran');
		$harga_pengeluaran  	= $this->input->post('harga_pengeluaran');
		
		$data = array(
		'id_pengeluaran' 		   => $id_pengeluaran,
		'nama_pengeluaran' 		 => $nama_pengeluaran, 
		'harga_pengeluaran' 	 => preg_replace("/[^0-9]/","",$harga_pengeluaran),
		);
	
		$this->db->where('id_pengeluaran', $id_pengeluaran);
		$this->db->update('t_pengeluaran', $data);
		$this->session->set_flashdata('berhasilEditPengeluaran','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diubah!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pengeluaran');
	}

	public function hapus_pengeluaran()
	{
		$id_pengeluaran 	= $this->input->post('id_pengeluaran');

		$where = array('id_pengeluaran' => $id_pengeluaran);
      $this->db->delete('t_pengeluaran', $where);
			$this->session->set_flashdata('berhasilHapusPengeluaran','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_pengeluaran');
	}
}
?>