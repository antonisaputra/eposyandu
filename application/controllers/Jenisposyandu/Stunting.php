<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stunting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function laporan_stunting()
    {
        $data['page'] = "formstunting";
        $data['title'] = "stunting_&_balita";

        // $data['stunting'] = $this->M_Posyandu->get_data_by_id($id,"stunting");
        $data['stunting'] = $this->M_Posyandu->posyandu_data_stunting();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('table/vl_stunting', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

    public function form_stunting($id)
    {
        $data['page'] = "formstunting";
        $data['title'] = "form_stunting";

        // $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"stunting");
        $data['stunting'] = $this->M_Posyandu->posyandu_data_stunting();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vstunting', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

}