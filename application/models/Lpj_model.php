<?php  

class Lpj_model extends CI_Model {

    public function union_nota() {
        $names=array('Pelunasan_Lelang','');
        $this->db->select('tanggal_nota, nota_penerimaan_id,jenis_penerimaan, nominal, nominal_lpj');
        
        $this->db->where_not_in('jenis_penerimaan', $names);
        $this->db->from('master_penerimaan');
        $query1 = $this->db->get_compiled_select();
        
        $this->db->select('tanggal_pengeluaran, nota_pengeluaran_id, jenis_pengeluaran, nominal_pengeluaran_lpj, nominal_pengeluaran');
        $this->db->from('master_pengeluaran');
        $query2 = $this->db->get_compiled_select();

        
        $query3 = $this->db->query($query1 . ' UNION ALL ' . $query2 . 'ORDER BY ' . 'tanggal_nota' );
        return $query3->result();
        
}

public function union_bku() {
    $this->db->select('tanggal_nota, nomor,jenis_nota, nominal, nominal_lpj');
    $this->db->from('nota_penerimaan');
    $query1 = $this->db->get_compiled_select();
    
    $this->db->select('tanggal, nomor, jenis_pengeluaran, nominal_lpj, nominal');
    $this->db->from('nota_pengeluaran');
    $query2 = $this->db->get_compiled_select();
    
   
    $query4 = $this->db->query($query1 . ' UNION ALL ' . $query2 . 'ORDER BY ' . 'tanggal_nota' );
    return $query4->result();
}
public function view(){
    return $this->db->get('query4')->result();
    $data = array();

    return $this->db->get('query3')->result();
    $data = array();
}

}