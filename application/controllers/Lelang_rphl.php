<?php 
class Multi_insert extends CI_Controller{
   
   function __construct()
   {
      parent::__construct();   
      $this->load->model('Lelang_rphl_model');
   }
   public function index(){

    $this->load->view('template/header');
    $this->load->view('template/sidebar');

      $data['e-lelang_rphl'] = $this->Lelang_rphl_model->get_lelang_rphl()->result();
      $this->load->view('penerimaan/tambah',$data);
      $this->load->view('template/footer');
      
   }
   public function input_data(){
      $result = array();
      foreach ($_POST['nominal'] as $key => $val) {
         $result[] = array(             
            'jenis_transaksi' => $_POST['jenis_transaksi'][$key],
            'nominal' => $_POST['nominal'][$key]         
         );      
      }      
      $this->db->insert_batch('master_penerimaan',$result);
   }
}