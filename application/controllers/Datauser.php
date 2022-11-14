<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function posyandu_datauser()
    {
        $data['page'] = "tabledatauser";
        $data['title'] = "datauser";

        // $data['datauser'] = $this->M_Posyandu->get_data_by_id($id,"datauser");
        // $data['datauser'] = $this->M_Posyandu->posyandu_data_datauser();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('table/vdata_user', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }
}