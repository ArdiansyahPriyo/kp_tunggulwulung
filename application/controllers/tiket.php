<?php 

class Tiket extends CI_Controller {


    public function index()
    {
        $data['tiket'] = $this->model_tiket->tampil_data();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('tiket', $data);
        $this->load->view('templates_home/footer');
    }


     public function pesan_tiket()
    {
        if($this->session->userdata('hak_akses') != 'pemancing'){
        $this->session->set_flashdata('harus_login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Anda belum login, Silahkan login !
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('login');
    }

        $id_subevent      = $this->input->post('id_subevent');
        $where = array('id_subevent' => $id_subevent);
        $data['tiket'] = $this->model_tiket->pesan_tiket($where, 't_subevent')->result();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('pesan_tiket', $data);
        $this->load->view('templates_home/footer');
    }

    // public function pesan_tiket($id_subevent)
    // {
    //     $where = array('id_subevent' =>$id_subevent);
    //     $data['tiket'] = $this->model_tiket->pesan_tiket($where, 't_subevent')->result();
    //     $this->load->view('templates_home/header');
    //     $this->load->view('templates_home/sidebar');
    //     $this->load->view('pesan_tiket', $data);
    //     $this->load->view('templates_home/footer');
    // }

    
}

?>