<?php 
class Lelang_rphl_model extends CI_Model{ 
   
   protected $_table = 'rphl';


    public function view(){
        return $this->db->get('rphl')->result();

	}
    public function view_by($id){
        $this->db->where('id', $id);
        return $this->db->get('rphl')->row();
      }
      

    public function lihat_lelang_rphl($virtual_account_rphl){
		$query = $this->db->select('*');
		$query = $this->db->where(['virtual_account_rphl' => $virtual_account_rphl]);
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