<?php  

class Dpk_model extends CI_Model {

    public function dpk() {
       
        $this->db->select('tanggal_nota, nota_penerimaan_id,jenis_penerimaan, nominal, nominal_lpj');
        
        $this->db->having('jenis_penerimaan','Uang Jaminan Lelang');
        $this->db->or_having('jenis_penerimaan','Setoran');
        $this->db->or_having('jenis_penerimaan','Kekurangan Hasil Bersih Lelang');
        $this->db->from('master_penerimaan');
        $query1 = $this->db->get_compiled_select();
        
        $this->db->select('tanggal_pengeluaran, nota_pengeluaran_id, jenis_pengeluaran, nominal_pengeluaran_lpj, nominal_pengeluaran');
        $this->db->having('jenis_pengeluaran','Pihak Ketiga');
        $this->db->from('master_pengeluaran');
        $query2 = $this->db->get_compiled_select();

        
        $query3 = $this->db->query($query1 . ' UNION ALL ' . $query2 . 'ORDER BY ' . 'tanggal_nota' );
        return $query3->result();
    }
}
