<?php

class Master_transaksi_model extends CI_Model {
	protected $_table = 'master_transaksi';

	public function tambah($data){
		return $this->db->insert_batch($this->_table, $data);
	}

	public function lihat_no_nota_penerimaan($nota_penerimaan_id){
		return $this->db->get_where($this->_table, ['nota_penerimaan_id' => $nota_penerimaan_id])->result();
	}

	public function hapus($nota_penerimaan_id){
		return $this->db->delete($this->_table, ['nota_penerimaan_id' => $nota_penerimaan_id]);
	}
}