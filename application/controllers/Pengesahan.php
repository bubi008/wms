<?php

use Dompdf\Dompdf;

class Pengesahan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('Bank_model', 'bank_m');
		$this->load->model('Penerimaan_model', 'penerimaan_m');
		$this->load->model('Master_transaksi_model', 'master_transaksi_m');
		$this->load->model('Jenis_model', 'jenis_m');
		$this->data['aktif'] = 'nota_penerimaan';
	}

	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/sidebar');

		$this->data['title'] = 'Data Nota Penerimaan';
		$this->data['all_penerimaan'] = $this->penerimaan_m->view();

		$this->data['title_j'] = 'Data Jenis';
		$this->data['all_jenis'] = $this->jenis_m->view();

		$this->load->view('pengesahan/index', $this->data);
	}

	public function tambah()
	{
		$this->load->view('template/header');
        $this->load->view('template/sidebar');

		$this->data['title'] = 'Tambah Nota Penerimaan';
		$this->data['all_bank'] = $this->bank_m->lihat_stok();
		$this->data['all_jenis'] =$this->jenis_m->view();

		$this->load->view('penerimaan/tambah', $this->data);

		$this->load->view('template/footer');
	}

	public function proses_tambah()
	{
		$jumlah_bank_dinotakan = count($this->input->post('idcsv_hidden'));

		$data_nota_penerimaan = [
			'nomor' => $this->input->post('nomor'),
			'tanggal_nota' => $this->input->post('tanggal_nota'),
			'jenis_nota' => $this->input->post('nama_jenis'),
			'nominal' => $this->input->post('total_hidden'),
		];

		$data_master_transaksi = [];

		for ($i = 0; $i < $jumlah_bank_dinotakan; $i++) {
			array_push($data_master_transaksi, ['bank_idcsv' => $this->input->post('idcsv_hidden')[$i]]);
			$data_master_transaksi[$i]['nota_penerimaan_id'] = $this->input->post('nomor');
			$data_master_transaksi[$i]['nama_jenis'] = $this->input->post('nama_jenis')[$i];
			$data_master_transaksi[$i]['jumlah_transaksi'] = $this->input->post('jumlah_hidden')[$i];
			$data_master_transaksi[$i]['nominal'] = $this->input->post('nominal_hidden')[$i];
			$data_master_transaksi[$i]['uraian'] = $this->input->post('uraian_hidden')[$i];
			$data_master_transaksi[$i]['tanggal_idcsv'] = $this->input->post('tanggal_hidden')[$i];

		}

		if ($this->penerimaan_m->tambah($data_nota_penerimaan) && $this->master_transaksi_m->tambah($data_master_transaksi)) {
			for ($i = 0; $i < $jumlah_bank_dinotakan; $i++) {
				$this->bank_m->min_stok($data_master_transaksi[$i]['jumlah_transaksi'], $data_master_transaksi[$i]['bank_idcsv']) or die('gagal min stok');
			}
			$this->session->set_flashdata('success', 'Nota <strong>Penerimaan</strong> Berhasil Dibuat!');
			redirect('penerimaan');
		} else {
			$this->session->set_flashdata('success', 'Nota <strong>Penerimaan</strong> Berhasil Dibuat!');
			redirect('penerimaan');
		}
	}

	public function detail($nomor)
	{
		$this->load->view('template/header');
        $this->load->view('template/sidebar');

		$this->data['title'] = 'Detail Nota Penerimaan';
		$this->data['penerimaan'] = $this->penerimaan_m->lihat_no_nota_penerimaan($nomor);
		$this->data['all_detail_penerimaan'] = $this->master_transaksi_m->lihat_no_nota_penerimaan($nomor);
		$this->data['no'] = 1;

		$this->load->view('pengesahan/detail', $this->data);
		$this->load->view('template/footer');
	}

	public function hapus($nomor)
	{
		if ($this->penerimaan_m->hapus($nomor) && $this->master_transaksi_m->hapus($nota_penerimaan_id)) {
			$this->session->set_flashdata('success', 'Nota Penerimaan <strong>Berhasil</strong> Dihapus!');
			redirect('penerimaan');
		} else {
			$this->session->set_flashdata('error', 'Nota Penerimaan <strong>Gagal</strong> Dihapus!');
			redirect('penerimaan');
		}
	}


	public function get_all_bank()
	{
		$data = $this->bank_m->lihat_uraian($_POST['uraian']);
		echo json_encode($data);
	}
	public function get_all_jenis()
	{
		$data = $this->jenis_m->lihat_jenis($_POST['nama_jenis']);
		echo json_encode($data);
	}
	public function keranjang_bank()
	{
		$this->load->view('penerimaan/keranjang');
	}

	public function export()
	{
		$dompdf = new Dompdf();
		$this->data['all_penerimaan'] = $this->penerimaan_m->view();
		$this->data['title'] = 'Laporan Data';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('penerimaan/report', $this->data, true);
		$dompdf->load_html ($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data' . date('d F Y'), array("Attachment" => false));
	}

	public function export_detail($nomor)
	{
		$dompdf = new Dompdf();
		$this->data['penerimaan'] = $this->penerimaan_m->lihat_no_nota_penerimaan($nomor);
		$this->data['all_detail_penerimaan'] = $this->master_transaksi_m->lihat_no_nota_penerimaan($nomor);
		$this->data['title'] = 'Nota Penerimaan';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('penerimaan/detail_report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Nota Penerimaan' . date('d F Y'), array("Attachment" => false));
		
	}

	public function otorisasi($nomor){

	$this->db->set('tanggal_pengesahan', FALSE);
	$this->db->where('tanggal_pengesahan', 'today');
	$this->db->update('nota_penerimaan');


	}
	 
}
