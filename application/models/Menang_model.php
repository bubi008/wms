<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menang_model extends CI_Model{ 
   
   protected $_table = 'master_penerimaan';


   public function view(){
       
    return $this->db->get('master_penerimaan')->result();
    $data = array();
 }
}