<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bank extends CI_Controller {
  
  public function __construct(){
    parent::__construct();

       // Load pagination library
       $this->load->library('pagination');
        
       // Per page limit
       $this->perPage = 50;
    
    $this->load->model('Bank_model');
    $this->load->model('Pagination_model'); // Load Bank_model ke controller ini
    $this->load->model('Beranda_model');
  }
  
  public function index(){
    
    $this->load->view('template/header');
    $this->load->view('template/sidebar');



    $data = array();   
    // Get messages from the session
    if($this->session->userdata('success_msg')){
        $data['success_msg'] = $this->session->userdata('success_msg');
        $this->session->unset_userdata('success_msg');
    }
    if($this->session->userdata('error_msg')){
        $data['error_msg'] = $this->session->userdata('error_msg');
        $this->session->unset_userdata('error_msg');
    }
    
    // If search request submitted
    if($this->input->post('submitSearch')){
        $inputKeywords = $this->input->post('searchKeyword');
        $searchKeyword = strip_tags($inputKeywords);
        if(!empty($searchKeyword)){
            $this->session->set_userdata('searchKeyword',$searchKeyword);
        }else{
            $this->session->unset_userdata('searchKeyword');
        }
    }elseif($this->input->post('submitSearchReset')){
        $this->session->unset_userdata('searchKeyword');
    }
    $data['searchKeyword'] = $this->session->userdata('searchKeyword');
    
    // Get rows count
    $conditions['searchKeyword'] = $data['searchKeyword'];
    $conditions['returnType']    = 'count';
    $rowsCount = $this->Bank_model->getRows($conditions);
    
    $config['base_url']    = base_url().'bank/index/';
        $config['uri_segment'] = 3;
        $config['total_rows']  = $rowsCount;
        $config['per_page']    = $this->perPage;
        $config['next_link'] = 'Selanjutnya';
$config['prev_link'] = 'Sebelumnya';
$config['first_link'] = 'Awal';
$config['last_link'] = 'Akhir';
$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
        
        // Initialize pagination library
        $this->pagination->initialize($config);
        
        // Define offset
        $page = $this->uri->segment(3);
        $offset = !$page?0:$page;
        
        // Get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
$this->db->having('stok=3');
        $data['bank'] = $this->Bank_model->getRows($conditions);
        $data['title'] = 'bank list';


   
    $this->load->view('bank/index', $data);

	$this->load->view('template/footer');
  }
  
  public function view($idcsv){
    $data = array();

    // Check whether member id is not empty
    if(!empty($idcsv)){
        $data['member'] = $this->bank_model->getRows(array('idcsv' => $idcsv));;
        $data['title']  = 'Bank Details';
        
        // Load the details page view
        $this->load->view('templates/header', $data);
        $this->load->view('bank/index', $data);
        $this->load->view('templates/footer');
    }else{
        redirect('bank');
    }
  }
  public function tambah(){

	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Bank_model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Bank_model->save(); // Panggil fungsi save() yang ada di Bank_model.php
        redirect('bank');
      }
    }
    
    $this->load->view('bank/form_tambah');
	$this->load->view('template/footer');

  }
  
  public function ubah($idcsv){

	$this->load->view('template/header');
	$this->load->view('template/sidebar');

    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Bank_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Bank_model->edit($idcsv); // Panggil fungsi edit() yang ada di Bank_model.php
        redirect('bank');
      }
    }
    
    $data['bank'] = $this->Bank_model->view_by($idcsv);
    $this->load->view('bank/form_ubah', $data);

	$this->load->view('template/footer');

  }
  
  public function hapus($idcsv){
    $this->Bank_model->delete($idcsv); // Panggil fungsi delete() yang ada di Bank_model.php
    redirect('bank');
  }

}