<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller{

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
		$data['user'] = $this->model_user->tampil_user()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function edit_user()
	{
		$id_user	 	= $this->input->post('id_user');
		$nama 			= $this->input->post('nama');
		$email 			= $this->input->post('email');
		$no_hp 			= $this->input->post('no_hp');
		$alamat			= $this->input->post('alamat');
		$hak_akses 	= $this->input->post('hak_akses');
		$password		= $this->input->post('password');
		$password2  = $this->input->post('password2');

		if ($password == $password2) {
			$data = array(
				'id_user' 		 => $id_user,
				'nama' 		     => $nama, 
				'email' 		   => $email,
				'no_hp' 		   => $no_hp,
				'alamat'			 => $alamat,
				'hak_akses'    => $hak_akses,
				'created_date' => date('Y-m-d H:i:s')		
			);

			$this->db->where('id_user', $id_user);
			$this->db->update('t_user', $data);
			$this->session->set_flashdata('berhasilEditUser','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('admin/data_user');
		}else{
			$data = array(
				'id_user' 		 => $id_user,
				'nama' 		     => $nama, 
				'email' 		   => $email,
				'no_hp' 		   => $no_hp,
				'alamat'			 => $alamat,
				'hak_akses'    => $hak_akses,
				'password'		 => md5($password),
				'created_date' => date('Y-m-d H:i:s')
			);

			$this->db->where('id_user', $id_user);
			$this->db->update('t_user', $data);
			$this->session->set_flashdata('berhasilEditUser','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	  				Data berhasil diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('admin/data_user');
		}
	}

	public function tambah_user()
	{
		$id_user			= $this->input->post('id_user');
		$nama					= $this->input->post('nama');
		$email				= $this->input->post('email');
		$no_hp				= $this->input->post('no_hp');
		$alamat				= $this->input->post('alamat');
		$password			= $this->input->post('password');
		$hak_akses		= $this->input->post('hak_akses');

		$data = array(
			'id_user' 		=> $id_user, 
			'nama' 				=> $nama,
			'email' 			=> $email,
			'no_hp' 			=> $no_hp,
			'alamat' 			=> $alamat,
			'password' 		=> md5($password), 
			'hak_akses' 	=> $hak_akses	
		);

		$this->model_user->tambah_user($data, 't_user');
		$this->session->set_flashdata('berhasilTambahUser','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_user');
	}

	public function hapus_user()
	{
		$id_user 	= $this->input->post('id_user');

		$where = array('id_user' => $id_user);
      $this->db->delete('t_user', $where);
			$this->session->set_flashdata('berhasilHapusUser','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  </div>');
		redirect('admin/data_user');
	}

}
?>