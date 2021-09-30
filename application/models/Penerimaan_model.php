<?php

class Penerimaan_model extends CI_Model 
{
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
		$this->db->trans_start();
		$this->db->delete('nota_penerimaan', array('nomor' => $nomor));
		$this->db->delete('master_penerimaan', array('nota_penerimaan_id' => $nomor));
		$this->db->trans_complete();
}
public function getById($id) {

	return $this->db->get_where($this->_table, ["id_np"=> $id])->row();
	}

public function update($data, $id){
	return $this->db->update($this->_table, $data, array('id_np'=>$id));
}
public function getAll(){
	return $this->db->get($this->_table)->result();
}

	public function edit($id_np){
		$data = array(
		  "nomor" => $this->input->post('nomor'),
		  "jenis_nota" => $this->input->post('jenis_nota'),
		  "tanggal_nota" => $this->input->post('tanggal_nota'),
		  "nominal" => $this->input->post('nominal'),
		  "tanggal_pengesahan" => $this->input->post('tanggal_pengesahan')
		);
		
		$this->db->where('id_np', $id_np);
		$this->db->update('nota_penerimaan', $data); // Untuk mengeksekusi perintah update data
	  }
	}
