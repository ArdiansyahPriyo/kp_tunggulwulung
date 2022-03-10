<?php 

class Model_pembelian extends CI_Model{
	
	public function tampil_data(){
		$this->db->select('t_subevent.*,t_event.id_event as id_event, t_event.event');
		$this->db->from('t_subevent');
		$this->db->join('t_event','t_event.id_event = t_subevent.id_event');
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
      	return $query->result();
	}

	public function tampil_data2(){
		$this->db->select('t_pembelianikan.*,t_subevent.*, t_supplier.*');
		$this->db->from('t_pembelianikan');
		$this->db->join('t_subevent','t_subevent.id_subevent = t_pembelianikan.id_subevent');
		$this->db->join('t_supplier', 't_supplier.id_supplier = t_pembelianikan.id_supplier');
		
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	} 

	public function list_nama_subevent() {
      $this->db->select('*');
      $this->db->from('t_subevent');
      //$this->db->where('hak_akses','Penilai');
      $query = $this->db->get();
      return $query->result();
   }

   public function tambah_pembelian($data,$table){
		$this->db->insert($table,$data);
	}
	

	public function list_nama_supplier() {
      $this->db->select('*');
      $this->db->from('t_supplier');
      //$this->db->where('hak_akses','panitia');
      $query = $this->db->get();
      return $query->result();
   }
}
?>