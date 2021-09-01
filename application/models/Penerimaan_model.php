<?php

class Penerimaan_model extends CI_Model {
	protected $_table = 'nota_penerimaan';

	public function view(){
		return $this->db->get($this->_table)->result();
	} 

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_no_nota_penerimaan($nomor){
		return $this->db->get_where($this->_table, ['nomor' => $nomor])->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function hapus($nomor){
		return $this->db->delete($this->_table, ['nomor' => $nomor]);
	}
}