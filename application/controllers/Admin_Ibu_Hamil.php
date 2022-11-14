<?php

class Admin_Ibu_Hamil extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ibu_Hamil_model');
    }
    public function index(){
        $data['title'] = "Ibu Hamil";
        $data['ibuHamil'] = $this->Ibu_Hamil_model->getIbuHamil();
        view_admin('ibu_hamil', 'index', $data);
    }

    public function tambah(){
        $data['title'] = "Tambah Ibu Hamil";
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|trim');
        $this->form_validation->set_rules('temp','Tempat Lahir','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('nik','NIK','required|trim');
        $this->form_validation->set_rules('bpjs','BPJS','required|trim');
        $this->form_validation->set_rules('bb','Berat Badan','required|trim');
        $this->form_validation->set_rules('tb','Tinggi Badan','required|trim');
        $this->form_validation->set_rules('l2p','L2P','required|trim');
        $this->form_validation->set_rules('lila','LILA','required|trim');
        $this->form_validation->set_rules('penyakit','Penyakit','required|trim');
        $this->form_validation->set_rules('darah','Tekanan Darah','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');
        $this->form_validation->set_rules('nama','Nama','required|trim');
        if($this->form_validation->run() == false){
            view_admin('ibu_hamil','tambah', $data);
        }else{
            $this->Ibu_Hamil_model->tambah();
            $this->session->set_flashdata('alert','alert-success');
            $this->session->set_flashdata('pesan','Data Guru Berhasil Di Tambah');
            redirect('Admin_Ibu_Hamil');
        }
    }
}