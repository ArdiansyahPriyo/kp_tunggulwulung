<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_sistem_mancing extends CI_Controller{
	
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
		$data['sistem'] = $this->model_sistem_mancing->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/sistem', $data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_sistem()
	{
		$created_by		= $this->session->userdata('nama');
		$sistem		    = $this->input->post('sistem');
	
		$data = array(
			'sistem' 		   => $sistem, 
			'created_by'   => $created_by,
			'created_date' => date('Y-m-d H:i:s')
		);

		$this->model_sistem_mancing->tambah_sistem($data, 't_sistem');

		$this->session->set_flashdata('berhasilTambahSistem','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_sistem_mancing');
	}

	public function edit_sistem()
	{
		$id_sistem	 	= $this->input->post('id_sistem');
		$sistem 			= $this->input->post('sistem');

		$data = array(
				'id_sistem' 		=> $id_sistem,
				'sistem' 		    => $sistem		
		);

			$this->db->where('id_sistem', $id_sistem);
			$this->db->update('t_sistem', $data);
			$this->session->set_flashdata('berhasilEditSistem','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('admin/data_sistem_mancing');
	}

	public function hapus_sistem()
	{
		$id_sistem 	= $this->input->post('id_sistem');

		$sql = $this->db->query("SELECT id_sistem FROM t_event where id_sistem = '$id_sistem'");
    $cek_data = $sql->num_rows();
    if ($cek_data > 0) {
      $this->session->set_flashdata('berhasilHapusSistem','<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-info-circle"></i>
						Sistem tidak bisa dihapus karena sudah digunakan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  </div>');
			redirect('admin/data_sistem_mancing');
	    }else{
	        $where = array('id_sistem' => $id_sistem);
		      $this->db->delete('t_sistem', $where);
					$this->session->set_flashdata('berhasilHapusSistem','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
		  				Data berhasil dihapus!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				  </div>');
				redirect('admin/data_sistem_mancing');
	    }
	}
} 
?>