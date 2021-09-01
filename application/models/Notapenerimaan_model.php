<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Notapenerimaan_model extends CI_Model{
     
    // GET ALL bank
    function get_banks(){
        $query = $this->db->get('bank');
        return $query;
    }
 
    //GET bank BY Penerimaan ID
    function get_bank_by_nota_penerimaan($id_np){
        $this->db->select('*');
        $this->db->from('bank');
        $this->db->join('detail', 'nota_penerimaan_id=id_np');
        $this->db->join('penerimaan', 'bank_idcsv=idcsv');
        $this->db->where('id_np',$id_np);
        $query = $this->db->get();
        return $query;
    }
 
    //READ
    function get_nota_penerimaan(){
        $this->db->select('nota_penerimaan.*,COUNT(id_np) AS item_bank');
        $this->db->from('nota_penerimaan');
        $this->db->join('detail', 'id_np=nota_penerimaan_id');
        $this->db->join('bank', 'bank_idcsv=idcsv');
        $this->db->group_by('id_np');
        $query = $this->db->get();
        return $query;
    }
 
      // CREATE
      function create_nota_penerimaan($nota_penerimaan,$bank){
        $this->db->trans_start();
            //INSERT TO PACKAGE
            date_default_timezone_set("Asia/Bangkok");
            $data  = array(
                'id_np' => $nota_penerimaan,
                'tanggal' => date('Y-m-d') 
            );
            $this->db->insert('nota_penerimaan', $data);
            //GET ID PACKAGE
            $id_np = $this->db->insert_id();
            $result = array();
                foreach($bank AS $key => $val){
                     $result[] = array(
                      'nota_penerimaan_id'   => $id_np,
                      'bank_idcsv'   => $_POST['bank'][$key]
                     );
                }      
            //MULTIPLE INSERT TO DETAIL TABLE
            $this->db->insert_batch('detail', $result);
        $this->db->trans_complete();
    }
 
     
    // UPDATE
    function update_nota_penerimaan($id_np,$nota_penerimaan,$bank){
        $this->db->trans_start();
            //UPDATE TO PACKAGE
            $data  = array(
                'id_np' => $nota_penerimaan
            );
            $this->db->where('id',$id_np);
            $this->db->update('nota_penerimaan', $data);
             
            //DELETE DETAIL PACKAGE
            $this->db->delete('detail', array('nota_penerimaan_id' => $id_np));
 
            $result = array();
                foreach($bank AS $key => $val){
                     $result[] = array(
                      'nota_penerimaan_id'   => $id_np,
                      'idcsv_id'   => $_POST['bank_edit'][$key]
                     );
                }      
            //MULTIPLE INSERT TO DETAIL TABLE
            $this->db->insert_batch('detail', $result);
        $this->db->trans_complete();
    }
 
    // DELETE
    function delete_nota_penerimaan($id_np){
        $this->db->trans_start();
            $this->db->delete('detail', array('nota_penerimaan_id' => $id_np));
            $this->db->delete('nota_penerimaan', array('id_np' => $id_np));
        $this->db->trans_complete();
    }
     
}