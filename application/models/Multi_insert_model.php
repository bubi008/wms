<?php 
class Multi_insert_model extends CI_Model{   
   public function get_master_transaksi(){
      $this->db->select('*');
      $this->db->from('master_transaksi');      
      return $this->db->get();
   }
}