<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lelang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('lelang/index');
		$this->load->view('template/footer');
	}
}
