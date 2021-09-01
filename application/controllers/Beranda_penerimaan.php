<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_penerimaan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');

		$this->load->model('Beranda_penerimaan_model');
		$this->data['total_nota_penerimaan'] = $this->Beranda_penerimaan_model->total_nota();

		$this->load->view('beranda/index', $this->data);
		$this->load->view('template/footer');
	}
}
