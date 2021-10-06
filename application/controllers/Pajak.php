<?php

class Pajak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		
		$this->load->model('Pajak_model', 'pajak_m');
		
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');

		$this->data['title'] = 'Buku Kas Pembantu PNBP';
		$data['query3']= $this->pajak_m->pajak();
		$this->load->view('pajak/index', $data);
		
		$this->load->view('template/footer');
    }
}