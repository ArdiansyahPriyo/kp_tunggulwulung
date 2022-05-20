<?php 

class Model_event extends CI_Model{
	
	public function tampil_data(){
		$this->db->select('t_event.*,t_sistem.id_sistem as id_sistem, t_sistem.sistem');
		$this->db->from('t_event');
		$this->db->join('t_sistem','t_sistem.id_sistem = t_event.id_sistem');
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
      	return $query->result();
	}

	public function list_nama_sistem() {
      $this->db->select('*');
      $this->db->from('t_sistem');
      //$this->db->where('hak_akses','Penilai');
      $query = $this->db->get();
      return $query->result();
   }

   public function tambah_event($data,$table){
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