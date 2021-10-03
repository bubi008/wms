<?php 
class Tambah_rphl_model extends CI_Model{ 
   
   protected $_table = 'master_penerimaan';


   public function get_master_penerimaan(){
	$this->db->select('*');
	$this->db->having(array('jenis_penerimaan='=>'Bea Lelang Pembeli'));
	$this->db->or_having(array('jenis_penerimaan='=>'Bea Lelang Penjual'));
	$this->db->or_having(array('jenis_penerimaan='=>'Kekurangan Hasil Bersih Lelang'));
	$this->db->or_having(array('jenis_penerimaan='=>'PPh'));
	$this->db->from('master_penerimaan');  
	   
	return $this->db->get();
 }
}


  