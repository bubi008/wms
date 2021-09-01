<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{
public function edit()
{
  $data['page'] = 'view/update';
  $this->load->view('view/update', $data);
}
}