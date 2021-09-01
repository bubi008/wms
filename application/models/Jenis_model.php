<?php

class Jenis_model extends CI_Model {

	protected $_table = 'jenis';

    public function view(){
        return $this->db->get('jenis')->result();
	} 
    public function view_by($id){
        $this->db->where('id', $id);
        return $this->db->get('jenis')->row();
      }
      

    public function lihat_jenis($nama_jenis){
		$query = $this->db->select('*');
		$query = $this->db->where(['nama_jenis' => $nama_jenis]);
		$query = $this->db->get($this->_table);
		return $query->row();
  }
	

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function hapus($id){
		return $this->db->delete($this->_table, ['id' => $id]);
	}
}