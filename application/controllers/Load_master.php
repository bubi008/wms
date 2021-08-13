<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Load_master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('load_master/index');
		$this->load->view('template/footer');
	}
}
