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

		$sql = $this->db->query("SELECT t_tiket.*, t_pesanan.*, t_event.* FROM t_tiket 
			     INNER JOIN t_pesanan ON t_pesanan.id_pesanan = t_tiket.id_pesanan INNER JOIN t_event ON t_event.id_event = t_pesanan.id_event where t_tiket.id_tiket ='$id_tiket' and t_tiket.status_tiket	 = 'sudah_validasi' and t_event.tanggal_pelaksanaan = '$tgl'")->result();
		if ($sql) {
		$data = array(
			'id_tiket' 		 				=> $id_tiket,
			'berat_ikan' 		      => $berat_ikan,
			'status_timbang'			=> 'belum_dirangking',
			'created_date'				=> date('Y-m-d') 
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

	public function edit(){

		$id_timbangikan	 	= $this->input->post('id_timbangikan');
		$berat_ikan 	    = $this->input->post('berat_ikan');

		$data = array(
			'id_timbangikan' 		=> $id_timbangikan,
			'berat_ikan' 				=> $berat_ikan 
		);

		$this->db->where('id_timbangikan', $id_timbangikan);
		$this->db->update('t_timbangikan', $data);
		$this->session->set_flashdata('berhasil_edit','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <script type ="text/JavaScript">  
      swal("Sukses","Data berhasil diubah","success") 
      </script>'
    );
		redirect('panitia/penimbangan_ikan');
	}

	public function hapus()
	{
		$id_timbangikan 	= $this->input->post('id_timbangikan');

		$where = array('id_timbangikan' => $id_timbangikan);
    $this->db->delete('t_timbangikan', $where);
		$this->session->set_flashdata('berhasil_hapus','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
	    <script type ="text/JavaScript">  
	    swal("Sukses","Data berhasil dihapus","success") 
	    </script>'
    );
		redirect('panitia/penimbangan_ikan');
	}

}
?>