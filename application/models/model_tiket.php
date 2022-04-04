<?php 

class Model_tiket extends CI_Model{


	public function tampil_data(){
		$this->db->select('t_subevent.*,t_event.*, t_pembelianikan.*');
		$this->db->from('t_subevent');
		$this->db->join('t_event','t_event.id_event = t_subevent.id_event');
		$this->db->join('t_pembelianikan','t_pembelianikan.id_subevent = t_subevent.id_subevent');
		
		$query = $this->db->get();
        return $query->result();
	} 
	
	public function pesan_tiket($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function beli(){
		$query = $this->db->get('t_pesanan');
		return $query->result_array();
	} 

}
?>