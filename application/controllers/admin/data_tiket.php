<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_tiket extends CI_Controller{
	
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
		$data['tiket'] = $this->model_pesanan_user->tiket_admin();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tiket', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function edit()
	{
		$id_tiket	 					= $this->input->post('id_tiket');
		$status_tiket 	    = $this->input->post('status_tiket');

		$data = array(
			'id_tiket' 		 				=> $id_tiket,
			'status_tiket' 		=> $status_tiket 
		);

		$this->db->where('id_tiket', $id_tiket);
		$this->db->update('t_tiket', $data);
		$this->session->set_flashdata('berhasilEditTiketAdmin','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diubah!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_tiket');


  }
}
?>