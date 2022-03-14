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
		$status 	  = $this->input->post('status');
		$password		= $this->input->post('password');
		$password2  = $this->input->post('password2');
		$foto				= $_FILES['foto']['name'];
		if ($foto ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "File gagal diupload";
			}else{
				$foto = $this->upload->data('file_name');
			}
		}

		if ($password == $password2) {
			if ($foto != null) {
			$data = array(
				'id_user' 		 => $id_user,
				'nama' 		     => $nama, 
				'email' 		   => $email,
				'no_hp' 		   => $no_hp,
				'alamat'			 => $alamat,
				'hak_akses'    => $hak_akses,
				'status' 			 => $status,
				'foto'				 => $foto	
			);
			}else{
			$data = array(
				'id_user' 		 => $id_user,
				'nama' 		     => $nama, 
				'email' 		   => $email,
				'no_hp' 		   => $no_hp,
				'alamat'			 => $alamat,
				'hak_akses'    => $hak_akses,
				'status' 			 => $status
			);
			}

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
			if ($foto != null) {
			$data = array(
				'id_user' 		 => $id_user,
				'nama' 		     => $nama, 
				'email' 		   => $email,
				'no_hp' 		   => $no_hp,
				'alamat'			 => $alamat,
				'hak_akses'    => $hak_akses,
				'status' 			 => $status,
				'password'		 => md5($password),
				'foto'				 => $foto
			);
		 }else{
		 	$data = array(
				'id_user' 		 => $id_user,
				'nama' 		     => $nama, 
				'email' 		   => $email,
				'no_hp' 		   => $no_hp,
				'alamat'			 => $alamat,
				'hak_akses'    => $hak_akses,
				'status' 			 => $status,
				'password'		 => md5($password)
			);
		 }
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
		$password			= md5($this->input->post('password'));
		$hak_akses		= $this->input->post('hak_akses');
		$status		 		= $this->input->post('status');
		$foto					= $_FILES['foto']['name'];
		if ($foto ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "File gagal diupload";
			}else{
				$foto = $this->upload->data('file_name');
			}
		}

		$sql = $this->db->query("SELECT email,password FROM t_user where email='$email' or password='$password'");
      $cek_email = $sql->num_rows();
      if ($cek_email > 0) {
      $this->session->set_flashdata('sudahAda','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Gagal, Email atau Password sudah ada!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'  
      );
      redirect('admin/data_user');
    }else{
    	$data = array(
			'id_user' 		=> $id_user, 
			'nama' 				=> $nama,
			'email' 			=> $email,
			'no_hp' 			=> $no_hp,
			'alamat' 			=> $alamat,
			'password' 		=> $password, 
			'hak_akses' 	=> $hak_akses,
			'status'			=> $status,
			'foto'				=> $foto,
			'created_date' => date('Y-m-d H:i:s')

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