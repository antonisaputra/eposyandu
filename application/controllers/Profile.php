<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }
public function posyandu_profile()
{
    // $data['profile'] = $this->M_Posyandu->posyandu_data_profile();
    
    $this->load->view('partial-admin/vheader');
    $this->load->view('partial-admin/vtopbar');
    $this->load->view('partial-admin/vsidebar');
    $this->load->view('admin/vprofile');
    $this->load->view('partial-admin/vfooter');
    
   
}

}

