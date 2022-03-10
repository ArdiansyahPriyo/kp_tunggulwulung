<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
       // 
        $this->load->view('templates_admin/header');
        $this->load->view('login');
        $this->load->view('templates_admin/footer');
    }

    public function auth()
    {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
        }else{
            $auth = $this->model_login->cek_login();
            //$data = $this->model_login->cek_login();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('login_gagal','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Email atau Password Salah!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                redirect('login');
            }else {
                $this->session->set_userdata('email',$auth->email);
                $this->session->set_userdata('hak_akses',$auth->hak_akses);
                $this->session->set_userdata('nama',$auth->nama);
                $this->session->set_userdata('id_user',$auth->id_user);
                $this->session->set_userdata('no_hp',$auth->no_hp);
                $this->session->set_userdata('alamat',$auth->alamat);

                switch($auth->hak_akses){
                    case 'admin' : redirect('admin/dashboard');
                        break;
                    case 'panitia' : redirect('panitia/dashboard'); 
                        break;
                    case 'pemancing' : redirect('home'); 
                        break;
                    default: break;
                }
            }
        }
       
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

?>