<?php 

class Model_panitia extends CI_Model{

	public function tampil_subevent(){
		$this->db->select('*');
      	$this->db->from('t_subevent');
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

	public function tampil_data2($id_subevent){
		$this->db->select('t_panitia.id_user,t_panitia.id_subevent, t_user.nama');
		$this->db->from('t_panitia');
		$this->db->join('t_subevent','t_subevent.id_subevent = t_panitia.id_subevent');
		$this->db->join('t_user', 't_user.id_user = t_panitia.id_user');
		$this->db->where('t_panitia.id_subevent', $id_subevent);
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	} 

	public function ambil_id_subevent($id_subevent)
	{
		$result = $this->db->where('id_subevent', $id_subevent)->limit(1)->get('t_subevent');
		if($result->num_rows() >= 0){
			return $result->row();
		}else{
			return false; 
		}
	}

	public function nama_panitia($id_subevent){

		$this->db->select('t_panitia.*,t_user.*');
		$this->db->from('t_panitia');
		$this->db->join('t_user','t_user.id_user = t_panitia.id_user');
		$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table); 
	}


}