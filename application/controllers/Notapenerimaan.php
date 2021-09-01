<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Notapenerimaan extends CI_Controller{
     
    function __construct(){
        parent::__construct();
        $this->load->model('Notapenerimaan_model','notapenerimaan_model');
    }
 
    // READ
    function index(){

        $this->load->view('template/header');
		$this->load->view('template/sidebar');
        $data['bank'] = $this->notapenerimaan_model->get_banks();
        $data['nota_penerimaan'] = $this->notapenerimaan_model->get_nota_penerimaan();
        $this->load->view('notapenerimaan_v/index',$data);

        $this->load->view('template/footer');
    }
 
    //CREATE
    function create(){
        $nota_penerimaan = $this->input->post('nota_penerimaan',TRUE);
        $bank = $this->input->post('bank',TRUE);
        $this->notapenerimaan_model->create_nota_penerimaan($nota_penerimaan,$bank);
        redirect('Notapenerimaan');
    }
 
    // GET DATA PRODUCT BERDASARKAN PACKAGE ID
    function get_bank_by_nota_penerimaan(){
        $id_np=$this->input->post('id_np');
        $data=$this->notapenerimaan_model->get_bank_by_nota_penerimaan($id_np)->result();
        foreach ($data as $result) {
            $value[] = (float) $result->idcsv;
        }
        echo json_encode($value);
    }
 
    //UPDATE
    function update(){
        $id_np = $this->input->post('edit_id',TRUE);
        $nota_penerimaan = $this->input->post('nota_penerimaan_edit',TRUE);
        $bank = $this->input->post('bank_edit',TRUE);
        $this->notapenerimaan_model->update_nota_penerimaan($id_np,$nota_penerimaan,$bank);
        redirect('Notapenerimaan');
    }
 
    // DELETE
    function delete(){
        $id_np = $this->input->post('delete_id',TRUE);
        $this->notapenerimaan_model->delete_nota_penerimaan($id_np);
        redirect('Notapenerimaan');
    }
}