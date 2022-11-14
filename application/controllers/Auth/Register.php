<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }
public function posyandu_Register()
{
    // $data['register'] = $this->M_Posyandu->posyandu_data_register();

    
    $this->load->view('admin/vregister');
   
}

}

