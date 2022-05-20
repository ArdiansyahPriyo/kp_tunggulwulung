<?php 

class Model_ranking extends CI_Model{

	public function tampil_ranking(){
		$this->db->select('t_ranking.*');
      	$this->db->from('t_ranking');
      	$this->db->where('created_date', date('Y-m-d'));
        $query = $this->db->get();
        return $query->result();
	}

	public function tampil_ranking2() {

		$this->db->select('t_ranking.*,t_timbangikan.*,t_tiket.*,t_pesanan.*, t_user.*, t_event.*');
		$this->db->from('t_ranking');
		$this->db->join('t_timbangikan','t_timbangikan.id_timbangikan = t_ranking.id_timbangikan');
		$this->db->join('t_tiket','t_tiket.id_tiket = t_timbangikan.id_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user', 't_user.id_user = t_pesanan.id_user');
		$this->db->join('t_event', 't_event.id_event = t_pesanan.id_event'); //get id subevent 
		$this->db->where('t_timbangikan.created_date',date("Y-m-d"));
		$this->db->order_by('t_ranking.urutan', 'asc');
		//$this->db->where('t_timbangikan.status_timbang', 'belum_dirangking');
		$query = $this->db->get();
		return $query->result();
   }

   public function tampil_ranking3() {

		$this->db->select('t_ranking.*,t_timbangikan.id_timbangikan,t_timbangikan.id_tiket,t_timbangikan.berat_ikan,t_tiket.id_tiket,t_tiket.id_pesanan,t_pesanan.id_pesanan,t_pesanan.id_user,t_pesanan.id_event, t_user.id_user,t_user.nama, t_event.id_event,t_event.event');
		$this->db->from('t_ranking');
		$this->db->join('t_timbangikan','t_timbangikan.id_timbangikan = t_ranking.id_timbangikan');
		$this->db->join('t_tiket','t_tiket.id_tiket = t_timbangikan.id_tiket');
		$this->db->join('t_pesanan','t_pesanan.id_pesanan = t_tiket.id_pesanan');
		$this->db->join('t_user', 't_user.id_user = t_pesanan.id_user');
		$this->db->join('t_event', 't_event.id_event = t_pesanan.id_event'); //get id subevent 
		//$this->db->where('t_timbangikan.created_date',date("Y-m-d"));
		$this->db->order_by('t_ranking.urutan', "asc");
		//$this->db->where('t_timbangikan.status_timbang', 'belum_dirangking');
		$query = $this->db->get();
		return $query->result();
   }

}

?>
