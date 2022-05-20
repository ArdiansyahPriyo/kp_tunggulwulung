<?php 

class Model_panitia extends CI_Model{

	public function tampil_event(){
		$this->db->select('*');
      	$this->db->from('t_event');
        $query = $this->db->get();
        return $query->result();
	}

	public function tambah_panitia($data,$table){
		$this->db->insert($table,$data);
	}

	public function list_nama_user() {
      $this->db->select('*');
      $this->db->from('t_user');
      $this->db->where('hak_akses','panitia');
      $query = $this->db->get();
      return $query->result();
    }

	public function tampil_data(){
		$this->db->select('t_panitia.*,t_user.*');
		$this->db->from('t_panitia');
		$this->db->join('t_user','t_user.id_user = t_panitia.id_user');
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	} 

	public function tampil_data2($id_event){
		$this->db->select('t_panitia.id_user,t_panitia.id_event, t_user.nama');
		$this->db->from('t_panitia');
		$this->db->join('t_event','t_event.id_event = t_panitia.id_event');
		$this->db->join('t_user', 't_user.id_user = t_panitia.id_user');
		$this->db->where('t_panitia.id_event', $id_event);
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	} 

	public function ambil_id_event($id_event)
	{
		$result = $this->db->where('id_event', $id_subevent)->limit(1)->get('t_event');
		if($result->num_rows() >= 0){
			return $result->row();
		}else{
			return false; 
		}
	}

	public function nama_panitia($id_event){

		$this->db->select('t_panitia.*,t_user.*');
		$this->db->from('t_panitia');
		$this->db->join('t_user','t_user.id_user = t_panitia.id_user');
		$this->db->where('id_event', $id_event);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table); 
	}


}