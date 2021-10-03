<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dpk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		
		$this->load->model('Penerimaan_model', 'penerimaan_m');
		$this->load->model('Dpk_model', 'dpk_m');
		
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->data['title'] = 'Buku Kas Pembantu Dana Pihak Ketiga';
		$data['query3']= $this->dpk_m->dpk();
		$this->load->view('dpk/index', $data);
		
		$this->load->view('template/footer');
    }
}