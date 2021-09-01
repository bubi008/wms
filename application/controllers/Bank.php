<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bank extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Bank_model'); // Load Bank_model ke controller ini
  }
  
  public function index(){
    $data['bank'] = $this->Bank_model->view();
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
    $this->load->view('bank/index', $data);

	$this->load->view('template/footer');
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