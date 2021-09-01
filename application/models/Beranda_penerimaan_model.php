<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_penerimaan_model extends CI_Model
{
public function total_nota_penerimaan() {
    return $this->db->get('nota_penerimaan')->num_rows();
    }
}