<?php 
class Reklas_model extends CI_Model{ 
   
   protected $_table = 'master_penerimaan';


   public function get_master_penerimaan(){
	$this->db->select('*');
	$this->db->having(array('jenis_penerimaan='=>'Uang Jaminan Lelang'));

	$this->db->from('master_penerimaan');  
	   
	return $this->db->get();
 }

 public function edit($id_master){
    $data = array(
      "tanggal_nota" => $this->input->post('input_tanggal_nota'),
      "nama" => $this->input->post('input_nama'),
      "nominal" => $this->input->post('input_nominal'),
      "uraian" => $this->input->post('input_uraian'),
      "virtual_account" => $this->input->post('input_virtual_account'),
      "kode_lelang" => $this->input->post('input_kode_lelang')


    );
    
    $this->db->where('id_master', $id_master);
    $this->db->update('reklas', $data); 
    }
}

  