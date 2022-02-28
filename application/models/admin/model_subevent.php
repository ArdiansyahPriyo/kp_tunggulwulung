<?php 

class Model_subevent extends CI_Model{
	
	public function tampil_data(){
		$this->db->select('t_subevent.*,t_event.id_event as id_event, t_event.event');
		$this->db->from('t_subevent');
		$this->db->join('t_event','t_event.id_event = t_subevent.id_event');
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
      	return $query->result();
	}

	public function list_nama_event() {
      $this->db->select('*');
      $this->db->from('t_event');
      //$this->db->where('hak_akses','Penilai');
      $query = $this->db->get();
      return $query->result();
   }

   public function tambah_subevent($data,$table){
		$this->db->insert($table,$data);
	}
	

	public function list_nama_user() {
      $this->db->select('*');
      $this->db->from('t_user');
      $this->db->where('hak_akses','panitia');
      $query = $this->db->get();
      return $query->result();
   }
}
?>