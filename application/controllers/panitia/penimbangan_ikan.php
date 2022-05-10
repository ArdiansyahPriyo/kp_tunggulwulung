<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Penimbangan_ikan extends CI_Controller{
	
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
		$data['timbang'] = $this->model_timbang->tampil_timbang();
		$this->load->view('templates_panitia/header');
		$this->load->view('templates_panitia/sidebar');
		$this->load->view('panitia/penimbangan_ikan', $data);
		$this->load->view('templates_panitia/footer');
	}

	public function timbang()
	{
		$id_tiket		  = $this->input->post('id_tiket');
		$berat_ikan		= $this->input->post('berat_ikan');
		$tgl = date("Y-m-d");

		$sql = $this->db->query("SELECT t_tiket.*, t_pesanan.*, t_subevent.* FROM t_tiket 
			     INNER JOIN t_pesanan ON t_pesanan.id_pesanan = t_tiket.id_pesanan INNER JOIN t_subevent ON t_subevent.id_subevent = t_pesanan.id_subevent where t_tiket.id_tiket ='$id_tiket' and t_tiket.status_tiket	 = 'sudah_validasi' and t_subevent.tanggal_pelaksanaan = '$tgl'")->result();
		if ($sql) {
		$data = array(
			'id_tiket' 		 				=> $id_tiket,
			'berat_ikan' 		      => $berat_ikan,
			'status_timbang'			=> 'belum_dirangking',
			'created_date'				=> date('Y-m-d H:i:s') 
		);

		$this->db->insert('t_timbangikan', $data);
		$this->session->set_flashdata('berhasil_timbang','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <script type ="text/JavaScript">  
      swal("Sukses","Data berhasil disimpan","success")  
      </script>'
    );
    redirect('panitia/penimbangan_ikan');
		}else{
			$this->session->set_flashdata('gagal_timbang','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <script type ="text/JavaScript">  
      swal("Gagal","Nomor tiket tidak ditemukan!","error")  
      </script>'
    );
    redirect('panitia/penimbangan_ikan');
		}
	}

}
?>