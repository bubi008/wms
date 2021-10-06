<?php

class Pnbp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		
		$this->load->model('Pnbp_model', 'pnbp_m');
		
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');

		$this->data['title'] = 'Buku Kas Pembantu PNBP';
		$data['query3']= $this->pnbp_m->pnbp();
		$this->load->view('pnbp/index', $data);
		
		$this->load->view('template/footer');
    }
}