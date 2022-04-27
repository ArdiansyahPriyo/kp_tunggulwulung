<?php 

class Model_pesanan_user extends CI_Model{

	public function tampil_pesanan(){
		
		$this->db->select('t_tiket.*,t_pesanan.*,t_user.*, t_subevent.*, t_event.*');
		$this->db->from('t_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent');
		$this->db->join('t_event', 't_event.id_event = t_subevent.id_event');
		$this->db->where('t_pesanan.id_user', $this->session->userdata('id_user'));
		$this->db->where('t_pesanan.transaction_status', 'settlement');
		//$this->db->where('t_tiket.status', 'aktif');
		$query = $this->db->get();
    	return $query->result();
	
	}

	public function tiket_admin(){
		
		$this->db->select('t_tiket.*,t_pesanan.*,t_user.*, t_subevent.*, t_event.*');
		$this->db->from('t_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent');
		$this->db->join('t_event', 't_event.id_event = t_subevent.id_event');
		//$this->db->where('t_pesanan.id_user', $this->session->userdata('id_user'));
		//$this->db->where('t_pesanan.transaction_status', 'settlement');
		$this->db->where('t_tiket.status_tiket', 'belum_validasi');
		$this->db->or_where('t_tiket.status_tiket', 'sudah_validasi');
		$query = $this->db->get();
    	return $query->result();
	
	}

	public function download($id_pesanan){
		
		$this->db->select('t_tiket.*,t_pesanan.*,t_user.*, t_subevent.*, t_event.*');
		$this->db->from('t_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent');
		$this->db->join('t_event', 't_event.id_event = t_subevent.id_event');
		$this->db->where('t_pesanan.id_user', $this->session->userdata('id_user'));
		$this->db->where('t_pesanan.transaction_status', 'settlement');
		$this->db->where('t_pesanan.id_pesanan', $id_pesanan);
		//$this->db->where('t_tiket.status', 'aktif');
		$query = $this->db->get();
    	return $query->result();
	
	}

	public function belum_bayar(){
		
		$this->db->select('t_tiket.*,t_pesanan.*,t_user.*, t_subevent.*, t_event.*');
		$this->db->from('t_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent');
		$this->db->join('t_event', 't_event.id_event = t_subevent.id_event');
		$this->db->where('t_pesanan.id_user', $this->session->userdata('id_user'));
		$this->db->where('t_pesanan.transaction_status', 'pending');
		//$this->db->where('t_tiket.status', 'aktif');
		$query = $this->db->get();
    	return $query->result();
	
	}

	public function dibatalkan(){
		
		$this->db->select('t_tiket.*,t_pesanan.*,t_user.*, t_subevent.*, t_event.*');
		$this->db->from('t_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent');
		$this->db->join('t_event', 't_event.id_event = t_subevent.id_event');
		$this->db->where('t_pesanan.id_user', $this->session->userdata('id_user'));
		$this->db->where('t_pesanan.transaction_status', 'expire');
		//$this->db->where('t_tiket.status', 'aktif');
		$query = $this->db->get();
    	return $query->result();
	
	}

}

?>
