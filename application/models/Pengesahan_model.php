<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengesahan_model extends CI_Model{
    
    function __construct() {
        // Set table name
        $this->table = 'nota_penerimaan';
    }
    
    /*
     * Fetch members data from the database
     * @param array filter data based on the passed parameters
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }
        
        if(!empty($params['searchKeyword'])){
            $search = $params['searchKeyword'];
            $likeArr = array('nomor' => $search, 'tanggal_nota' => $search, 'jenis_nota' => $search);
            $this->db->or_like($likeArr);
        }
        
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        }else{
            if(array_key_exists("id_np", $params)){
                $this->db->where('id_np', $params['id_np']);
                $query = $this->db->get();
                $result = $query->row_array();
            }else{
                $this->db->order_by('tanggal_nota', 'asc');
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                    $this->db->limit($params['limit'],$params['start']);
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                    $this->db->limit($params['limit']);
                }
                
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        
        // Return fetched data
        return $result;
    }
    
    /*
     * Insert members data into the database
     * @param $data data to be insert based on the passed parameters
     */
    public function insert($data = array()) {
        if(!empty($data)){
            // Add created and modified date if not included
            if(!array_key_exists("created", $data)){
                $data['created'] = date("Y-m-d H:i:s");
            }
            if(!array_key_exists("modified", $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            
            // Insert member data
            $insert = $this->db->insert($this->table, $data);
            
            // Return the status
            return $insert?$this->db->insert_id():false;
        }
        return false;
    }
    
    /*
     * Update member data into the database
     * @param $data array to be update based on the passed parameters
     * @param $id num filter data
     */
    function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }
    
    /*
     * Delete member data from the database
     * @param num filter data based on the passed parameter
     */
    public function delete($id){
        // Delete member data
        $delete = $this->db->delete($this->table, array('id_np' => $id_np));
        
        // Return the status
        return $delete?true:false;
    }
}