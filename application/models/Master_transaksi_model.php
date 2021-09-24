<?php

class Master_transaksi_model extends CI_Model {
	protected $_table = 'master_transaksi';

	public function lihat_stok(){
		$query = $this->db->get_where($this->_table, 'jumlah_transaksi > 0');
		return $query->result();

	}
	public function tambah($data){
		return $this->db->insert_batch($this->_table, $data);
	}

	public function lihat_no_nota_penerimaan($nota_penerimaan_id){
		return $this->db->get_where($this->_table, ['nota_penerimaan_id' => $nota_penerimaan_id])->result();
	}

	public function hapus($nota_penerimaan_id){
		return $this->db->delete($this->_table, ['nota_penerimaan_id' => $nota_penerimaan_id]);
	}

	public function lihat_uraian($uraian){
		$query = $this->db->select('*');
		$query = $this->db->where(['uraian' => $uraian]);
		$query = $this->db->get($this->_table);
		return $query->row();
}
}