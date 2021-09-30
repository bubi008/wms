<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lpj extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		
		$this->load->model('Penerimaan_model', 'penerimaan_m');
		$this->load->model('Lpj_model', 'Lpj_m');
		
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->data['title'] = 'Buku Kas Umum';
		$data['query']= $this->Lpj_m->union_nota();
		$this->load->view('lpj/index', $data);


		
		$this->load->view('template/footer');
	}
}
