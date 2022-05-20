<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != 'panitia'){
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
		//$data['event'] = $this->model_event->tampil_data()->result();
		$this->load->view('templates_panitia/header');
		$this->load->view('templates_panitia/sidebar');
		$this->load->view('panitia/validasi');
		$this->load->view('templates_panitia/footer');
	}

	public function tiket()
	{
		$id_tiket		= $this->input->post('id_tiket');
		$date = date("Y-m-d");

		$sql = $this->db->query("SELECT t_tiket.*, t_pesanan.*, t_event.* FROM t_tiket 
			INNER JOIN t_pesanan ON t_pesanan.id_pesanan = t_tiket.id_pesanan INNER JOIN t_event ON t_event.id_event = t_pesanan.id_event where t_tiket.id_tiket ='$id_tiket' and t_tiket.status_tiket	 = 'belum_validasi' and t_event.tanggal_pelaksanaan = '$date'")->result();
		//$sql = $this->db->query("SELECT * FROM t_tiket where id_tiket ='$id_tiket' ")->result();  
		if ($sql) {
		$data = array(
			'id_tiket' 		 				=> $id_tiket,
			'status_tiket' 		=> 'sudah_validasi' 
		);

		$this->db->where('id_tiket', $id_tiket);
		$this->db->update('t_tiket', $data);
		$this->session->set_flashdata('valid','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <script type ="text/JavaScript">  
      swal("Sukses","Tiket valid ","success")  
      </script>'  
  	);
		redirect('panitia/validasi');
		}else{
			$this->session->set_flashdata('tidak_valid','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <script type ="text/JavaScript">  
      swal("Gagal","Data tiket tidak valid!","error")  
      </script>'  
  	);
		redirect('panitia/validasi');
		}

	}
}
?>