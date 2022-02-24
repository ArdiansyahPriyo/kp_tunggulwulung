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
		$data['event'] = $this->model_event->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/event', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_event()
	{
		$event		= $this->input->post('event');
	
		$data = array(
			'event' 		=> $event, 
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
		$id_event	 	= $this->input->post('id_event');
		$event 			= $this->input->post('event');

		$data = array(
				'id_event' 		=> $id_event,
				'event' 		  => $event		
		);

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