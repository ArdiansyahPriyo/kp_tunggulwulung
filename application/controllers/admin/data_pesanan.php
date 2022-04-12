<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pesanan extends CI_Controller{
	
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
		$data['pesanan'] = $this->model_pesanan->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pesanan', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function edit_pesanan()
	{
		$id_pesanan	 					= $this->input->post('id_pesanan');
		$transaction_status 	= $this->input->post('transaction_status');

		$data = array(
			'id_pesanan' 		 				=> $id_pesanan,
			'transaction_status' 		=> $transaction_status 
		);

		$this->db->where('id_pesanan', $id_pesanan);
		$this->db->update('t_pesanan', $data);
		$this->session->set_flashdata('berhasilEditPesanan','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diubah!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pesanan');
	}

	public function hapus_pesanan()
	{
		$id_pesanan 	= $this->input->post('id_pesanan');

		$where = array('id_pesanan' => $id_pesanan);
      $this->db->delete('t_pesanan', $where);
			$this->session->set_flashdata('berhasilHapusPesanan','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_pesanan');
	}

}
?>