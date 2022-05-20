<?php 

class Model_pesanan extends CI_Model{
	public function tampil_data(){
		$this->db->select('t_pesanan.*,t_user.*, t_event.*');
		$this->db->from('t_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_event', 't_event.id_event = t_pesanan.id_event');
		//$this->db->join('t_transaksi', 't_transaksi.id_transaksi = t_pesanan.id_transaksi');
		$query = $this->db->get();
    	return $query->result();
	} 

	// public function tambah_event($data,$table){
	// 	$this->db->insert($table,$data);
	// }
	function tambah_pesanan($table,$data){
    	$this->db->insert($table, $data);
     	$last_id = $this->db->insert_id();
     	return $last_id;
	}
}
?>