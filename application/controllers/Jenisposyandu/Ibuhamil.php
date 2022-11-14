<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bayi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function laporan_ibuhamil()
    {
        $data['page'] = "formibuhamil";
        $data['title'] = "ibuhamil_&_balita";

        // $data['ibuhamil'] = $this->M_Posyandu->get_data_by_id($id,"ibuhamil");
        $data['ibuhamil'] = $this->M_Posyandu->posyandu_data_ibuhamil();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('table/vl_ibuhamil', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

    public function form_ibuhamil($id)
    {
        $data['page'] = "formibuhamil";
        $data['title'] = "form_ibuhamil";

        // $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"ibuhamil");
        $data['ibuhamil'] = $this->M_Posyandu->posyandu_data_ibuhamil();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vibuhamil', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

}