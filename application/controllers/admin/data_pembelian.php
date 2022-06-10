<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pembelian extends CI_Controller{
	
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
		$data['pembelian']        = $this->model_pembelian->tampil_data2();
		$data['list_event']       = $this->model_pembelian->list_nama_event();
		$data['list_supplier']    = $this->model_pembelian->list_nama_supplier();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pembelian_ikan', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_pembelian()
	{
		$id_event							= $this->input->post('id_event');
		$id_supplier							= $this->input->post('id_supplier');
		$jenis_ikan								= $this->input->post('jenis_ikan');
		$berat_ikan								= $this->input->post('berat_ikan');
		$total_harga							= $this->input->post('total_harga');

		$sql = $this->db->query("SELECT id_event FROM t_pembelianikan where id_event='$id_event' ");	
		$cek_event = $sql->num_rows();
		if ( $cek_event > 0 ) {
			$this->session->set_flashdata('pembelianSudahAda','<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-times-circle"></i>
	  				Gagal, Data pembelian pada subevent sudah ada!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}else{
			$data = array(
			'id_event' 						=> $id_event, 
			'id_supplier' 						=> $id_supplier,
			'jenis_ikan' 							=> $jenis_ikan,
			'berat_ikan'							=> $berat_ikan,
			'total_harga' 						=> preg_replace("/[^0-9]/","",$total_harga),
			'created_date'						=> date('Y-m-d')
		);

		$this->model_pembelian->tambah_pembelian($data, 't_pembelianikan');
		$this->session->set_flashdata('berhasilTambahPembelian','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pembelian');
		}

		
	}

	public function edit_pembelian()
	{
		$id_pembelianikan	 	= $this->input->post('id_pembelianikan');
		$id_supplier	 	    = $this->input->post('id_supplier');
		$jenis_ikan 				= $this->input->post('jenis_ikan');
		$berat_ikan					= $this->input->post('berat_ikan');
		$total_harga 				= $this->input->post('total_harga');
		
		$data = array(
				'id_pembelianikan' 	=> $id_pembelianikan,
				'id_supplier' 		  => $id_supplier,
				'jenis_ikan' 		   	=> $jenis_ikan, 
				'berat_ikan'			 	=> $berat_ikan,
				'total_harga' 		  => preg_replace("/[^0-9]/","",$total_harga)
			);

			$this->db->where('id_pembelianikan', $id_pembelianikan);
			$this->db->update('t_pembelianikan', $data);
			$this->session->set_flashdata('berhasilEditPembelian','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('admin/data_pembelian');
  }

	public function hapus_pembelian()
	{
		$id_pembelianikan 	= $this->input->post('id_pembelianikan');

		$where = array('id_pembelianikan' => $id_pembelianikan);
      $this->db->delete('t_pembelianikan', $where);
			$this->session->set_flashdata('berhasilHapusPembelian','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_pembelian');
	}

}?>