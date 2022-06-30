<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_supplier extends CI_Controller{
	
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
		$data['supplier']      = $this->model_supplier->tampil_supplier()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/supplier', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_supplier()
	{
		$id_supplier			    = $this->input->post('id_supplier');
		$nama_supplier				= $this->input->post('nama_supplier');
		$alamat_supplier			= $this->input->post('alamat_supplier');
		$no_hp_supplier				= $this->input->post('no_hp_supplier');

		$data = array(
			'id_supplier' 		    => $id_supplier, 
			'nama_supplier' 			=> $nama_supplier,
			'alamat_supplier' 		=> $alamat_supplier,
			'no_hp_supplier' 			=> $no_hp_supplier
		);

		$this->model_supplier->tambah_supplier($data, 't_supplier');
		$this->session->set_flashdata('berhasilTambahSupplier','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_supplier');
	}

	public function edit_supplier()
	{
		$id_supplier	 	    = $this->input->post('id_supplier');
		$nama_supplier 			= $this->input->post('nama_supplier');
		$alamat_supplier		= $this->input->post('alamat_supplier');
		$no_hp_supplier 		= $this->input->post('no_hp_supplier');
		
		$data = array(
				'id_supplier' 		     => $id_supplier,
				'nama_supplier' 		   => $nama_supplier, 
				'alamat_supplier'			 => $alamat_supplier,
				'no_hp_supplier' 		   => $no_hp_supplier
			);

			$this->db->where('id_supplier', $id_supplier);
			$this->db->update('t_supplier', $data);
			$this->session->set_flashdata('berhasilEditSupplier','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('admin/data_supplier');
  }

	public function hapus_supplier()
	{
		$id_supplier 	= $this->input->post('id_supplier');

		$sql = $this->db->query("SELECT id_supplier FROM t_pembelianikan where id_supplier = '$id_supplier'");
    $cek_data = $sql->num_rows();
    if ($cek_data > 0) {
      $this->session->set_flashdata('berhasilHapusSupplier','<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-info-circle"></i>
						Tidak dapat menghapus supplier karena data sudah digunakan dalam pembelian!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  </div>');
			redirect('admin/data_supplier');
	    }else{
	      $where = array('id_supplier' => $id_supplier);
	      $this->db->delete('t_supplier', $where);
				$this->session->set_flashdata('berhasilHapusSupplier','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  </div>');
			redirect('admin/data_supplier');
	    }

	}


}