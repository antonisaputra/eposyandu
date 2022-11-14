<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ptm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function laporan_ptm()
    {
        $data['page'] = "formptm";
        $data['title'] = "ptm_&_balita";

        // $data['ptm'] = $this->M_Posyandu->get_data_by_id($id,"ptm");
        $data['ptm'] = $this->M_Posyandu->posyandu_data_ptm();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('table/vl_ptm', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

    public function form_ptm($id)
    {
        $data['page'] = "formptm";
        $data['title'] = "form_ptm";

        // $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"ptm");
        $data['ptm'] = $this->M_Posyandu->posyandu_data_ptm();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vptm', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

}