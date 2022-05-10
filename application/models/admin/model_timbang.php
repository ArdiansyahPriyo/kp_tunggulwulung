<?php 

class Model_timbang extends CI_Model{

	public function tampil_timbang() {
      // $this->db->select('*');
      // $this->db->from('t_timbangikan');
      // $this->db->where('created_date',date("Y-m-d"));
      // $query = $this->db->get();
      // return $query->result();


	  $this->db->select('t_timbangikan.*,t_tiket.*,t_pesanan.*, t_user.*, t_subevent.*');
		$this->db->from('t_timbangikan');
		$this->db->join('t_tiket','t_tiket.id_tiket = t_timbangikan.id_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user', 't_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent'); //get id subevent 
		$this->db->where('t_timbangikan.created_date',date("Y-m-d"));
		$this->db->where('t_timbangikan.status_timbang', 'belum_dirangking');
		$query = $this->db->get();
		return $query->result();
   }


   
	
}

?>