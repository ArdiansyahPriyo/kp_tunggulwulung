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
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar', $data);
        $this->load->view('tiket_saya');
        $this->load->view('templates_home/footer');
    }
}
?>