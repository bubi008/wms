<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bank_model extends CI_Model {

  protected $_table = 'bank';
  
  // Fungsi untuk menampilkan semua data bank
   
  function getRows($params = array()){
    $this->db->select('*');
    
    $this->db->from($this->_table);
    
    if(array_key_exists("conditions", $params)){
        foreach($params['conditions'] as $key => $val){
            $this->db->where($key, $val);
        }
    }
    
    if(!empty($params['searchKeyword'])){
        $search = $params['searchKeyword'];
        $likeArr = array('uraian' => $search, 'kode_lelang' => $search, 'virtual_account' => $search);
        $this->db->or_like($likeArr);
    }
    
    if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
        $result = $this->db->count_all_results();
    }else{
        if(array_key_exists("idcsv", $params)){
            $this->db->where('idcsv', $params['idcsv']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('tanggal', 'asc');
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
public function view(){
  $this->db->having('stok=3');
  return $this->db->get('bank')->result();
    $data = array();
   

    
        
        // Check whether member id is not empty
        if(!empty($idcsv)){
            $data['bank'] = $this->bank->getRows(array('idcsv' => $idcsv));;
            $data['title']  = 'Bank Details';
            
            // Load the details page view
            $this->load->view('templates/header', $data);
            $this->load->view('bank/index', $data);
            $this->load->view('templates/footer');
        }else{
            redirect('bank');
        }
    }
   
  
  
  // Fungsi untuk menampilkan data berdasarkan idcsv nya
  public function view_by($idcsv){
    $this->db->where('idcsv', $idcsv);
    $this->db->having('stok=3');
    return $this->db->get('bank')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, idcsv tidak harus divalidasi
    // Jadi idcsv di validasi hanya ketika menambah data bank saja
    if($mode == "save")
      $this->form_validation->set_rules('input_idcsv', 'idcsv', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_tanggal', 'tanggal', 'required|max_length[50]');
    $this->form_validation->set_rules('input_nama', 'nama', 'required');
    $this->form_validation->set_rules('input_nominal', 'nominal', 'required');
    $this->form_validation->set_rules('input_uraian', 'uraian', 'required');
    $this->form_validation->set_rules('input_virtual_account', 'virtual_account', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel bank
  public function save(){
    $data = array(
      "idcsv" => $this->input->post('input_idcsv'),
      "tanggal" => $this->input->post('input_tanggal'),
      "nama" => $this->input->post('input_nama'),
      "nominal" => $this->input->post('input_nominal'),
      "uraian" => $this->input->post('input_uraian'),
      "virtual_account" => $this->input->post('input_virtual_account')
    );
    
    $this->db->insert('bank', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data bank berdasarkan idcsv bank
  public function edit($idcsv){
    $data = array(
      "tanggal" => $this->input->post('input_tanggal'),
      "nama" => $this->input->post('input_nama'),
      "nominal" => $this->input->post('input_nominal'),
      "uraian" => $this->input->post('input_uraian'),
      "virtual_account" => $this->input->post('input_virtual_account'),
      "kode_lelang" => $this->input->post('input_kode_lelang')


    );
    
    $this->db->where('idcsv', $idcsv);
    $this->db->update('bank', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data bank berdasarkan idcsv bank
  public function delete($idcsv){
    $this->db->where('idcsv', $idcsv);
    $this->db->delete('bank'); // Untuk mengeksekusi perintah delete data
  }

  public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
  }
  
	public function lihat_stok(){
		$query = $this->db->get_where($this->_table, 'stok > 2');
		return $query->result();

	}
  public function min_stok($stok, $idcsv){
		$query = $this->db->set('stok', 'stok-' . $stok, false);
		$query = $this->db->where('idcsv', $idcsv);
		$query = $this->db->update($this->_table);
		return $query;
	}
  public function lihat_uraian($uraian){
		$query = $this->db->select('*');
		$query = $this->db->where(['uraian' => $uraian]);
		$query = $this->db->get($this->_table);
		return $query->row();
 

    }
}