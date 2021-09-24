<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'auth_m');
    }
    function login ()
    {
        checklog();
        $this->load->view('auth/login');
    }

    function ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->auth_m->getlogin($username, $password);
        $ceklogin = $login->num_rows();
        $datalogin = $login->row_array();

        $data = array(
          'id_user'=>$datalogin['id_user'],
          'nama_lengkap'=>$datalogin['nama_lengkap'],
          'username'=>$datalogin['username'],
          'password'=>$datalogin['password'],
          'role'=>$datalogin['role'],
        'kd_kantor'=>$datalogin['kd_kantor']
            
        );
    $this->session->set_userdata($data);
   
   
        if ($ceklogin == 1) { 
            redirect('Beranda');
        }else {

            $this->session->set_flashdata('msg',
            '<div class="alert alert-warning" role="alert">
         <!-- SVG icon code with class="mr-1" -->
         Data Tidak Ditemukan!!
         </div>');

            redirect ("auth/login");
        }
    }
    function logout()
    {
        session_destroy();
        redirect('auth/login');

    }

}