<?php 

class Model_tiket extends CI_Model{


	public function tampil_data(){
		$this->db->select('t_event.*,t_sistem.*, t_pembelianikan.*');
		$this->db->from('t_event');
		$this->db->join('t_sistem','t_sistem.id_sistem = t_event.id_sistem');
		$this->db->join('t_pembelianikan','t_pembelianikan.id_event = t_event.id_event');
		
		$query = $this->db->get();
        return $query->result();
	} 
	
	public function pesan_tiket($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function beli(){
		$id_user = $this->session->userdata('id_user');
		$this->db->select('*');
		$this->db->from('t_pesanan');
		$this->db->where('id_user', $id_user);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else {
			return array();
		}
		//return $query->result_array();
	} 

}
?>