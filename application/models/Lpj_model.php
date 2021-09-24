<?php  

class Lpj_model extends CI_Model {

    public function joinnp() {
        $this->db->select("*");
        $this->db->from('master_transaksi');
        $this->db->join('nota_pengeluaran', 'nota_pengeluaran.id=master_transaksi.nota_pengeluaran_id', 'left outer');
        $query = $this->db->get();
        return $query->result ();

        
}
public function view(){
    return $this->db->get('master_transaksi')->result();
    $data = array();
}

}