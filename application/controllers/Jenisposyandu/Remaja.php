<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Remaja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function laporan_remaja()
    {
        $data['page'] = "formremaja";
        $data['title'] = "remaja_&_balita";

        // $data['remaja'] = $this->M_Posyandu->get_data_by_id($id,"remaja");
        $data['remaja'] = $this->M_Posyandu->posyandu_data_remaja();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('table/vl_remaja', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

    public function form_remaja($id)
    {
        $data['page'] = "formremaja";
        $data['title'] = "form_remaja";

        // $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"remaja");
        $data['remaja'] = $this->M_Posyandu->posyandu_data_remaja();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vremaja', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

}