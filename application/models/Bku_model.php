<?php  

class Bku_model extends CI_Model {

   
public function union_bku() {
    $this->db->select('tanggal_nota, nomor,jenis_nota, nominal, nominal_lpj');
    $this->db->from('nota_penerimaan');
    $query1 = $this->db->get_compiled_select();
    
    $this->db->select('tanggal, nomor, jenis_pengeluaran, nominal_lpj, nominal');
    $this->db->from('nota_pengeluaran');
    $query2 = $this->db->get_compiled_select();
    
   
    $query = $this->db->query($query1 . ' UNION ALL ' . $query2 . 'ORDER BY ' . 'tanggal_nota' );
    return $query->result();
}
public function view(){
    return $this->db->get('query')->result();
    $data = array();
}

}