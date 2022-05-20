<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller {


    public function __construct(){
        parent::__construct();

        if($this->session->userdata('hak_akses') != 'pemancing'){
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
        $data['user'] = $this->model_profil->tampil_user();
        $data['pesanan'] = $this->model_pesanan_user->tampil_pesanan();
        $data['belum_bayar'] = $this->model_pesanan_user->belum_bayar();
        $data['dibatalkan'] = $this->model_pesanan_user->dibatalkan();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar', $data);
        $this->load->view('tiket_saya');
        $this->load->view('templates_home/footer');
    }

    public function download()
    {
        $this->load->library('dompdf_gen');


        $data['pesanan'] = $this->model_pesanan_user->tampil_pesanan();

        $id_pesanan      = $this->input->post('id_pesanan');
      //  $where = array('id_pesanan' => $id_pesanan);
        $data['pesanan'] = $this->model_pesanan_user->download($id_pesanan);

        $this->load->view('download_tiket3', $data);

        $paper_size   = 'A5';
        $orientation  = 'landscape';
        $html         = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("tunggul_wulung_tiket.pdf", array('attachment' => 0));
    }
}
?>