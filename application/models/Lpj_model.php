<?php  

class Lpj_model extends CI_Model {

    public function union_nota() {
        $this->db->select('tanggal_nota, nota_penerimaan_id, pengeluaran_lpj, nominal, nominal_lpj');
        $this->db->from('master_penerimaan');
        $query1 = $this->db->get_compiled_select();
        
        $this->db->select('tanggal_pengeluaran, penerimaan_lpj, nota_pengeluaran_id, nominal_pengeluaran_lpj, nominal_pengeluaran');
        $this->db->from('master_pengeluaran');
        $query2 = $this->db->get_compiled_select();
        
       
        $query = $this->db->query($query1 . ' UNION ALL ' . $query2 . 'ORDER BY ' . 'tanggal_nota' );
        return $query->result();
        
}
public function view(){
    return $this->db->get('query')->result();
    $data = array();
}

}