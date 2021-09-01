<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda_model extends CI_Model
{
  public function total_rows() {
    return $this->db->get('bank')->num_rows();
  }

 }