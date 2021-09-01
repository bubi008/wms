<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdfview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
     
        $this->data['aktif'] = 'bank';
        $this->load->model('Bank_model', 'bank_m');
    }

    

    public function laporan_pdf()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $this->data['all_bank'] = $this->bank_m->lihat();
        $this->data['title'] = 'Laporan Data Barang';
        $this->data['no'] = 1;

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_penerimaan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = $this->load->view('laporan_pdf', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
