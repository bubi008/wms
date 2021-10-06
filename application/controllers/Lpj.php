<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lpj extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		
		$this->load->model('Penerimaan_model', 'penerimaan_m');
		$this->load->model('Lpj_model', 'Lpj_m');
		$this->load->model('Bku_model', 'bku_m');
		
	}

	public function index()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');

		$tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $transaksi = $this->Lpj_m->union_nota();  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'transaksi/cetak';
            $label = 'Semua Data Transaksi';
        }else{ // Jika terisi
            $transaksi = $this->Lpj_m->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'transaksi/cetak?tgl_awal='.$tgl_awal.'&tgl_akhir='.$tgl_akhir;
            $tgl_awal = date('Y-m-d', strtotime($tgl_awal)); // Ubah format tanggal jadi yyyy-mm-dd
            $tgl_akhir = date('Y-m-d', strtotime($tgl_akhir)); // Ubah format tanggal jadi yyyy-mm-dd
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
        }
        $data['transaksi'] = $transaksi;
        $data['url_cetak'] = base_url('index.php/'.$url_cetak);
        $data['label'] = $label;
       
    
		$this->data['title'] = 'Buku Kas Umum';
		$data['query3']= $this->Lpj_m->union_nota();
		$this->load->view('lpj/index', $data);
		
		$this->load->view('template/footer');
	}
	public function bku()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->data['title'] = 'Buku Kas Umum';
	

		$data['query4']= $this->bku_m->union_bku();
		$this->load->view('lpj/bku', $data);

		
		$this->load->view('template/footer');
}
}