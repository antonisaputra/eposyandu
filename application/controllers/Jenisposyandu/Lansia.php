<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lansia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function laporan_lansia()
    {
        $data['page'] = "formlansia";
        $data['title'] = "lansia_&_balita";

        // $data['lansia'] = $this->M_Posyandu->get_data_by_id($id,"lansia");
        $data['lansia'] = $this->M_Posyandu->posyandu_data_lansia();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('table/vl_lansia', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

    public function form_lansia($id)
    {
        $data['page'] = "formlansia";
        $data['title'] = "form_lansia";

        // $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"lansia");
        $data['lansia'] = $this->M_Posyandu->posyandu_data_lansia();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vlansia', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }

}