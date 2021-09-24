<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Beranda_penerimaan_model');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		
		$this->load->model('Beranda_model');
		$this->db->having('stok=2');
        $this->data['total_bank'] = $this->Beranda_model->total_rows();

		$this->data['total_nota_penerimaan'] = $this->Beranda_penerimaan_model->total_nota_penerimaan();


		$this->load->view('beranda/index', $this->data);
		$this->load->view('template/footer');
	}
}
