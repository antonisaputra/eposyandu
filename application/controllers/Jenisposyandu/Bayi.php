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

    public function laporan_bayi()
    {
        $data['page'] = "formbayi";
        $data['title'] = "bayi_&_balita";

        // $data['bayi'] = $this->M_Posyandu->get_data_by_id($id,"bayi");
        $data['bayi'] = $this->M_Posyandu->posyandu_data_bayi();
        
            $this->load->view('partial-admin/vheader', $data);
            $this->load->view('partial-admin/vtopbar', $data);
            $this->load->view('partial-admin/vsidebar', $data);
            $this->load->view('table/vl_bayi', $data);
            $this->load->view('partial-admin/vfooter', $data);

    }

    public function form_bayi($id)
    {
        $data['page'] = "formbayi";
        $data['title'] = "form_bayi";

        // $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"bayi");
        $data['bayi'] = $this->M_Posyandu->posyandu_data_bayi();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vbayi', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

}