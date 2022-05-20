<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller{
	
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
		$data['ranking'] = $this->model_ranking->tampil_ranking2();
		$this->load->view('templates_panitia/header');
		$this->load->view('templates_panitia/sidebar');
		$this->load->view('panitia/ranking', $data);
		$this->load->view('templates_panitia/footer');
	}

	public function simpan()
	{
		$data = array();
		foreach ($_POST['id_timbangikan'] as $key => $val) {
				$data[] = array( 				
					'id_timbangikan' 	=> $_POST['id_timbangikan'][$key],
					'urutan'	        => $_POST['urutan'][$key],
					'berat_ikan'	    => $_POST['berat_ikan'][$key],
					'created_date'    => date('Y-m-d H:i:s'),
					);
			}
		$this->db->insert_batch('t_ranking', $data);
		$this->session->set_flashdata('berhasil_ranking','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <script type ="text/JavaScript">  
      swal("Sukses","Data penimbangan ikan berhasil diranking","success")  
      </script>'
    );
    redirect('panitia/ranking');
	}
}
?>