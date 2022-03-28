<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods:GET,OPTIONS");

class Tiket extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-nXtq1Ygedqp9vvhnry01_ULS', 'production' => false);
        $this->load->library('midtrans');
        $this->midtrans->config($params);
        $this->load->helper('url'); 
    }


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
        $this->load->view('templates_home/header_midtrans');
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

    public function token()
    {
      $nama = $this->input->post('nama');
      $id_user = $this->input->post('id_user');
      $id_subevent = $this->input->post('id_subevent');
      $email = $this->input->post('email');
      $no_hp = $this->input->post('no_hp');
      $alamat = $this->input->post('alamat');
      $subevent = $this->input->post('subevent');
      $harga = $this->input->post('harga');
      
      // Required
      $transaction_details = array(
        'order_id' => $id_user.mt_rand(000000, 999999),
        'gross_amount' => $harga, // no decimal allowed for creditcard
      );

      // Optional
      $item1_details = array(
        'id' => $id_subevent,
        'price' => $harga,
        'quantity' => 1,
        'name' => $subevent
      );

      // Optional
      // $item2_details = array(
      //   'id' => 'a2',
      //   'price' => 20000,
      //   'quantity' => 2,
      //   'name' => "Orange"
      // );

      // Optional
      $item_details = array ($item1_details);

      // Optional
      // $billing_address = array(
      //   'first_name'    => "Andri",
      //   'last_name'     => "Litani",
      //   'address'       => "Mangga 20",
      //   'city'          => "Jakarta",
      //   'postal_code'   => "16602",
      //   'phone'         => "081122334455",
      //   'country_code'  => 'IDN'
      // );

      // Optional
      $shipping_address = array(
        // 'first_name'    => "Obet",
        // 'last_name'     => "Supriadi",
        'address'       => $alamat,
        // 'city'          => "Jakarta",
        // 'postal_code'   => "16601",
        // 'phone'         => "08113366345",
        // 'country_code'  => 'IDN'
      );

      // Optional
      $customer_details = array(
        'first_name'    => $nama,
        //'last_name'     => "Litani",
        'email'         => $email,
        'phone'         => $no_hp,
        //'billing_address'  => $billing_address,
         'shipping_address' => $shipping_address
      );

      // Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'day', 
            'duration'  => 1
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

      error_log(json_encode($transaction_data));
      $snapToken = $this->midtrans->getSnapToken($transaction_data);
      error_log($snapToken);
      echo $snapToken;
    }

    public function finish()
    {
      $result = json_decode($this->input->post('result_data'),true);

      $nama = $this->input->post('nama'); 
      $id_user = $this->input->post('id_user');
      $id_subevent = $this->input->post('id_subevent');
      $email = $this->input->post('email');
      $no_hp = $this->input->post('no_hp');
      $alamat = $this->input->post('alamat');
      $subevent = $this->input->post('subevent');
      $harga = $this->input->post('harga');

      $data1 = [
        'id_transaksi'       => $result['order_id'],
        'gross_amount'       => $result['gross_amount'],
        'payment_type'       => $result['payment_type'],
        'transaction_time'   => $result['transaction_time'],
        'transaction_status' => $result['transaction_status'],
        'bank'               => $result['va_numbers'][0]['bank'],
        'va_number'          => $result['va_numbers'][0]['va_number'],
        'pdf_url'            => $result['pdf_url'],
        'status_code'        => $result['status_code']
      ];
      
      $simpan = $this->db->insert('t_transaksi', $data1);
      if ($simpan) {
        echo "Sukses";
      }else{
        echo "Gagal";
      }

      $data2 = array(
      'id_pesanan'   => $id_subevent.$id_user.mt_rand(0000, 9999), 
      'id_user'      => $id_user,
      'id_subevent'  => $id_subevent,
      'id_transaksi' => $result['order_id']
      );
      $this->db->insert('t_pesanan', $data2);
    }
}

?>