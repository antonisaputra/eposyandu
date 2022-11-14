<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }
public function posyandu_login()
{
    // $data['login'] = $this->M_Posyandu->posyandu_data_login();

    
    $this->load->view('admin/vlogin');
   
}

}

