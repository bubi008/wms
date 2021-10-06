<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Menang_model', 'menang_m');
	}

	public function index()
	{
		$this->load->view('template/header');

		
		$this->load->view('template/sidebar');

        $this->data['all_menang'] = $this->menang_m>view();

		$this->load->view('menang/index', $this->data);
		$this->load->view('template/footer');
	}
}
