<?php

use Dompdf\Dompdf;

class Pengeluaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('Bank_model', 'bank_m');
		$this->load->model('Penerimaan_model', 'penerimaan_m');
		$this->load->model('master_penerimaan_model', 'master_penerimaan_m');
		$this->load->model('Jenis_model', 'jenis_m');
        $this->load->model('Pengeluaran_model', 'pengeluaran_m');
		$this->load->model('Master_pengeluaran_model', 'master_pengeluaran_m');

		$this->data['aktif'] = 'nota_pengeluaran';
	}

	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/sidebar');

		$this->data['title'] = 'Data Nota Pengeluaran';
		$this->data['all_pengeluaran'] = $this->pengeluaran_m->view();

		$this->data['title_j'] = 'Data Jenis';
		$this->data['all_jenis'] = $this->jenis_m->view_pengeluaran();

		$this->load->view('pengeluaran/index', $this->data);
		$this->load->view('template/footer');

	}

	public function tambah()
	{
		$this->load->view('template/header');
        $this->load->view('template/sidebar');

		$this->data['title'] = 'Tambah Nota Pengeluaran';
		$this->data['all_master_penerimaan'] = $this->master_penerimaan_m->lihat_stok();
		$this->data['all_jenis'] =$this->jenis_m->view_pengeluaran();

		$this->load->view('pengeluaran/tambah', $this->data);

		$this->load->view('template/footer');
	}

	public function proses_tambah()
	{
		$jumlah_bank_dikeluarkan = count($this->input->post('id_master_hidden'));

		$data_nota_pengeluaran = [
			'nomor' => $this->input->post('nomor'),
			'tanggal' => $this->input->post('tanggal'),
			'jenis_pengeluaran' => $this->input->post('nama_jenis'),
			'nominal' => $this->input->post('total_hidden'),
		];

		$data_master_pengeluaran = [];

		for ($i = 0; $i < $jumlah_bank_dikeluarkan; $i++) {
			array_push($data_master_pengeluaran, ['id_master_penerimaan' => $this->input->post('id_master_hidden')[$i]]);
			$data_master_pengeluaran[$i]['nota_pengeluaran_id'] = $this->input->post('nomor');
			$data_master_pengeluaran[$i]['jenis_pengeluaran'] = $this->input->post('nama_jenis');
			$data_master_pengeluaran[$i]['jumlah_pengeluaran'] = $this->input->post('jumlah_pengeluaran_hidden')[$i];
			$data_master_pengeluaran[$i]['nominal_pengeluaran'] = $this->input->post('nominal_hidden')[$i];
			$data_master_pengeluaran[$i]['uraian'] = $this->input->post('uraian_hidden')[$i];
			$data_master_pengeluaran[$i]['tanggal_penerimaan'] = $this->input->post('tanggal_nota_hidden')[$i];
			$data_master_pengeluaran[$i]['tanggal_pengeluaran'] = $this->input->post('tanggal');
			$data_master_pengeluaran[$i]['nota_penerimaan_id'] = $this->input->post('nota_penerimaan_id_hidden')[$i];
			$data_master_pengeluaran[$i]['rekening_tujuan'] = $this->input->post('rek_tujuan_hidden')[$i];


		}

		if ($this->pengeluaran_m->tambah($data_nota_pengeluaran) && $this->master_pengeluaran_m->tambah($data_master_pengeluaran)) {
			for ($i = 0; $i < $jumlah_bank_dikeluarkan; $i++) {
				$this->master_penerimaan_m->min_stok($data_master_pengeluaran[$i]['jumlah_pengeluaran'], $data_master_pengeluaran[$i]['id_master_penerimaan']) or die('gagal min stok');
			}
			$this->session->set_flashdata('success', 'Nota <strong>Pengeluaran</strong> Berhasil Dibuat!');
			redirect('pengeluaran');
		} else {
			$this->session->set_flashdata('success', 'Nota <strong>Pengeluaran</strong> Berhasil Dibuat!');
			redirect('pengeluaran');
		}
	}

	public function detail($nomor)
	{
		$this->load->view('template/header');
        $this->load->view('template/sidebar');

		$this->data['title'] = 'Detail Nota Pengeluaran';
		$this->data['pengeluaran'] = $this->pengeluaran_m->lihat_no_nota_pengeluaran($nomor);
		$this->data['all_detail_pengeluaran'] = $this->master_pengeluaran_m->lihat_no_nota_pengeluaran($nomor);
		$this->data['no'] = 1;

		$this->load->view('pengeluaran/detail', $this->data);
		$this->load->view('template/footer');
	}

	public function hapus($nomor)
	{
		if ($this->pengeluaran_m->hapus($nomor) && $this->master_pengeluaran_m->hapus($nota_penerimaan_id)) {
			$this->session->set_flashdata('success', 'Nota Pengeluaran <strong>Berhasil</strong> Dihapus!');
			redirect('pengeluaran');
		} else {
			$this->session->set_flashdata('error', 'Nota Pengeluaran <strong>Gagal</strong> Dihapus!');
			redirect('pengeluaran');
		}
	}


	public function get_all_master_penerimaan()
	{
		$data = $this->master_penerimaan_m->lihat_uraian($_POST['uraian']);
		echo json_encode($data);
	}
	public function get_all_jenis()
	{
		$data = $this->jenis_m->lihat_jenis($_POST['nama_jenis']);
		echo json_encode($data);
	}
	public function keranjang_transaksi()
	{
		$this->load->view('pengeluaran/keranjang');
	}

	public function export()
	{
		$dompdf = new Dompdf();
		$this->data['all_pengeluaran'] = $this->pengeluaran_m->view();
		$this->data['title'] = 'Laporan Data';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Portrait');
		$html = $this->load->view('pengeluaran/report', $this->data, true);
		$dompdf->load_html ($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data' . date('d F Y'), array("Attachment" => false));
	}

	public function export_detail($nomor)
	{
		$dompdf = new Dompdf();
		$this->data['pengeluaran'] = $this->pengeluaran_m->lihat_no_nota_pengeluaran($nomor);
		$this->data['all_detail_pengeluaran'] = $this->master_pengeluaran_m->lihat_no_nota_pengeluaran($nomor);
		$this->data['title'] = 'Nota Pengeluaran';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Portrait');
		$html = $this->load->view('pengeluaran/detail_report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Nota Pengeluaran' . date('d F Y'), array("Attachment" => false));
	}
}
