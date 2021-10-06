<?php 
class Reklas extends CI_Controller{
   
   function __construct()
   {
      parent::__construct();   
      $this->load->model('Reklas_model');
   }
   public function index(){
    $this->load->view('template/header');
	$this->load->view('template/sidebar');
    
      $data['master_penerimaan'] = $this->Reklas_model->get_master_penerimaan()->result();
      $this->load->view('reklas/index',$data);
   }
   public function input_data(){
      $result = array();
      foreach ($_POST['jenis_penerimaan'] as $key => $val) {
         $result[] = array(     
            'nota_penerimaan_id' => $_POST['nota_penerimaan_id'][$key],        
            'jenis_penerimaan' => $_POST['jenis_penerimaan'][$key],
            'nominal' => $_POST['nominal'][$key],
            'virtual_account_penerimaan' => $_POST['virtual_account_penerimaan'][$key],
            'kode_lelang' => $_POST['kode_lelang'][$key],
            'uraian' => $_POST['uraian'][$key],
            'jumlah_transaksi' => $_POST['jumlah_transaksi'][$key],
            'tanggal_nota' => $_POST['tanggal_nota'][$key],

            

         );      
      }      
      $this->db->insert_batch('master_penerimaan',$result);
      redirect('reklas');
   }
}