<?php 

class Model_pesanan extends CI_Model{
	public function tampil_data(){
		$this->db->select('t_pesanan.*,t_user.*, t_subevent.*');
		$this->db->from('t_pesanan');
		$this->db->join('t_user','t_user.id_user = t_pesanan.id_user');
		$this->db->join('t_subevent', 't_subevent.id_subevent = t_pesanan.id_subevent');
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