<?php

use Dompdf\Dompdf;

class Pengesahan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('Pengesahan_model');
		$this->load->model('Penerimaan_model', 'penerimaan_m');
		$this->load->model('Jenis_model', 'jenis_m');
		$this->load->model('Master_transaksi_model', 'master_transaksi_m');
	
		
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
			'tanggal_pengesahan' => $this->input->post('tanggal_pengesahan'),
	
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

	public function ubah($id_np){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
	
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
		  if($this->penerimaan_model-->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
			$this->penerimaan_model-->edit($id_np); // Panggil fungsi edit() yang ada di Bank_model.php
			redirect('pengesahan');
		  }
		}
		
		$data['pengesahan'] = $this->Penerimaan_model->view_by($id_np);
		$this->load->view('pengesahan/ubah', $data);
	
		$this->load->view('template/footer');

	}
	public function edit($id){
        $data = array();
        
        // Get member data
        $memData = $this->nota_penerimaan->getRows(array('id_np' => $id));
        
        // If update request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules
            $this->form_validation->set_rules('id_np', 'id_np', 'required');
            $this->form_validation->set_rules('nomor', 'nomor', 'required');
            $this->form_validation->set_rules('jenis_nota', 'jenis_nota', 'required');
            $this->form_validation->set_rules('tanggal_nota', 'tanggal_nota', 'required');
			$this->form_validation->set_rules('nominal', 'nominal', 'required');
			$this->form_validation->set_rules('nota_pengeluaran_id', 'nota_pengeluaran_id');
            $this->form_validation->set_rules('tanggal_pengesahan', 'tanggal_pengesahan', 'required');
			$this->form_validation->set_rules('pejabat', 'pejabat');
			$this->form_validation->set_rules('kode_lelang', 'kode_lelang');

            
            // Prepare member data
            $memData = array(
                'id_np'=> $this->input->post('id_np'),
                'nomor' => $this->input->post('nomor'),
                'jenis_nota'     => $this->input->post('jenis_nota'),
                'tanggal_nota'    => $this->input->post('tanggal_nota'),
				'nominal'    => $this->input->post('nominal'),
				'nota_pengeluaran_id'    => $this->input->post('nota_pengeluaran_id'),
                'tanggal_pengesahan'   => $this->input->post('tanggal_pengesahan'),
				'pejabat'    => $this->input->post('pejabat'),
				'kode_lelang'    => $this->input->post('kode_lelang'),


            );
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Update member data
                $update = $this->nota_penerimaan->update($memData, $id_np);

                if($update){
                    $this->session->set_userdata('success_msg', 'Member has been updated successfully.');
                    redirect('pengesahan');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }

        $data['nota_penerimaan'] = $memData;
        $data['title'] = 'Update Member';
        
        // Load the edit page view
        $this->load->view('templates/header', $data);
        $this->load->view('pengesahan/edit', $data);
        $this->load->view('templates/footer');
    }

	public function update() {
		$this->form_validation->set_rules('tanggal_pengesahan', 'tanggal_pengesahan');
		if ($this->form_validation->run()==true)
		{
			$id_np = $this->input->post('id_np');
			$data['tanggal_pengesahan'] = $this->input->post('tanggal_pengesahan');
			$this->pengesahan_m->update($data,$id_np);

		}
	


	}
	 
}
