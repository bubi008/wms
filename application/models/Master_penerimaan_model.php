<?php

class master_penerimaan_model extends CI_Model {
	protected $_table = 'master_penerimaan';

	public function get_penerimaan(){
		$this->db->select('*');
		$this->db->from('master_penerimaan');      
		return $this->db->get();
	}
	public function lihat_stok(){
		$query = $this->db->get_where($this->_table, 'jumlah_transaksi > 0');
		return $query->result();
	}
	public function min_stok($jumlah_transaksi, $id_master){
		  $query = $this->db->set('jumlah_transaksi', 'jumlah_transaksi-' . $jumlah_transaksi, false);
		  $query = $this->db->where('id_master', $id_master);
		  $query = $this->db->update($this->_table);
		  return $query;
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