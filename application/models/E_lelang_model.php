<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class E_lelang_model extends CI_Model {

  protected $_table = 'e-lelang';
  public function view(){
    return $this->db->get('e-lelang')->result();

  }
  public function duatabel() {
    $this->db->select("*");
    $this->db->from('bank');
    $this->db->join('e-lelang', 'e-lelang.virtual_account_llg=bank.virtual_account', 'left');
    $query = $this->db->get();
    return $query->result ();

  }
}