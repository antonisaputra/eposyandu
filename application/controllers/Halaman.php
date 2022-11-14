<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
    }

    public function index()
    {
        $data['page'] = "v_landingpage";
        $data['title'] = "landing";
        // $data['tot_paket'] = $this->M_Paket->hitung_tot_paket();
        // $data['tot_arsitek'] = $this->M_Architect->hitung_tot_arsitek();

        $this->load->view('partial-landing/vtopbar-landing', $data);
        $this->load->view('partial-landing/vnavbar-landing', $data);
        $this->load->view('landing/v_landingPage', $data);
        $this->load->view('partial-landing/vfooter-landing', $data);
    }
    public function home()
    {
        $data['page'] = "home";
        $data['title'] = "dashboard";

        $data['a_data'] = $this->M_Posyandu->posyandu_data();

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('admin/vhome', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }
    public function add_bayi_page()
    {

        $data['page'] = "home";
        $data['title'] = "dashboard";

        $data['bayi'] = $this->M_Posyandu->posyandu_data();
        $this->form_validation->set_rules('nama', 'Nama', 'requred|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('partial-admin/vheader', $data);
            $this->load->view('partial-admin/vtopbar', $data);
            $this->load->view('partial-admin/vsidebar', $data);
            $this->load->view('form/vbayi', $data);
            $this->load->view('partial-admin/vfooter', $data);
        } else {

        }
    }
    public function edit_bayi_page($id)
    {


        $data['page'] = "bayi&balita";
        $data['title'] = "formbayi";

        $data['eb'] = $this->M_Posyandu->posyandu_data_byid($id);

        $this->load->view('partial-admin/vheader', $data);
        $this->load->view('partial-admin/vtopbar', $data);
        $this->load->view('partial-admin/vsidebar', $data);
        $this->load->view('form/vbayi_edit', $data);
        $this->load->view('partial-admin/vfooter', $data);
    }








    // public function add_ptm()
    // {
    //     $data['page'] = "laporanptm";
    //     $data['title'] = "Tambah_ptm";

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_ptm', $data);
    //     $this->load->view('form/vptm', $data);
    // }
    // public function add_remaja()
    // {
    //     $data['page'] = "laporanremaja";
    //     $data['title'] = "Tambah_remaja";

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_remaja', $data);
    //     $this->load->view('form/vremaja', $data);
    // }
    // public function add_ibuhamil()
    // {
    //     $data['page'] = "laporanibuhamil";
    //     $data['title'] = "Tambah_ibuhamil";

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_ibuhamil', $data);
    //     $this->load->view('form/vibuhamil', $data);
    // }
    // public function add_lansia()
    // {
    //     $data['page'] = "laporanlansia";
    //     $data['title'] = "Tambah_lansia";

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_lansia', $data);
    //     $this->load->view('form/vlansia', $data);
    // }
    // public function add_stunting()
    // {
    //     $data['page'] = "laporanstunting";
    //     $data['title'] = "Tambah_stunting";

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_stunting', $data);
    //     $this->load->view('form/vstunting', $data);
    // }







    // public function edit_bayi($id)
    // {
    //     $data['page'] = "bayi";
    //     $data['title'] = "Edit bayi";

    //     // $data['a_data'] = $this->M_Posyandu->bayi_data_byid($id);
    //     $data['a_data'] = $this->M_Posyandu->get_data_by_id($id,"bayi");

    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('form/vbayi', $data);
    //     $this->load->view('partial-admin/vfooter', $data);
    // }
    // public function edit_ptm($id)
    // {
    //     $data['page'] = "ptm";
    //     $data['title'] = "Edit ptm";

    //     $data['a_data'] = $this->M_Posyandu->ptm_data_byid($id);

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_ptm', $data);
    //     $this->load->view('form/vptm', $data);
    // }
    // public function edit_remaja($id)
    // {
    //     $data['page'] = "remaja";
    //     $data['title'] = "Edit remaja";

    //     $data['a_data'] = $this->M_Posyandu->remaja_data_byid($id);

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_remaja', $data);
    //     $this->load->view('form/vremaja', $data);
    // }
    // public function edit_ibuhamil($id)
    // {
    //     $data['page'] = "ibuhamil";
    //     $data['title'] = "Edit ibuhamil";

    //     $data['a_data'] = $this->M_Posyandu->ibuhamil_data_byid($id);

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_ibuhamil', $data);
    //     $this->load->view('form/vibuhamil', $data);
    // }
    // public function edit_lansia($id)
    // {
    //     $data['page'] = "lansia";
    //     $data['title'] = "Edit lansia";

    //     $data['a_data'] = $this->M_Posyandu->lansia_data_byid($id);

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_lansia', $data);
    //     $this->load->view('form/vlansia', $data);
    // }
    // public function edit_stunting($id)
    // {
    //     $data['page'] = "stunting";
    //     $data['title'] = "Edit stunting";

    //     $data['a_data'] = $this->M_Posyandu->stunting_data_byid($id);

    //     $this->load->view('partial-admin/vfooter', $data);
    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('table/vl_stunting', $data);
    //     $this->load->view('form/vstunting', $data);
    // }


    // public function admin_data_user($email)
    // {
    //     $data['page'] = "datauser";
    //     $data['title'] = "data_user";

    //     $data['a_data'] = $this->M_Posyandu->datauser_data_byemail($email);

    //     $this->load->view('partial-admin/vheader', $data);
    //     $this->load->view('partial-admin/vtopbar', $data);
    //     $this->load->view('partial-admin/vsidebar', $data);
    //     $this->load->view('table/vdata_user', $data);
    //     $this->load->view('partial-admin/vfooter', $data);
    // }


}
