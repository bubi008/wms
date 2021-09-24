<?php 
class Multi_insert extends CI_Controller{
   
   function __construct()
   {
      parent::__construct();   
      $this->load->model('Multi_insert_model');
   }
   public function index(){

    $this->load->view('template/header');
    $this->load->view('template/sidebar');

      $data['master_transaksi'] = $this->Multi_insert_model->get_master_transaksi()->result();
      $this->load->view('multi_insert/index',$data);
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
      $this->db->insert_batch('master_transaksi',$result);
   }
}