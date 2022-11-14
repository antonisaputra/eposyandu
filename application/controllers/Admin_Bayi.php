<?php

class Admin_Bayi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bayi_model');
    }
    public function index(){
        $data['title'] = "Bayi";
        $data['bayi'] = $this->Bayi_model->getBayi();
        view_admin('bayi','index', $data);
    }

    public function tambah(){
        $data['title'] = "Tambah Data Bayi";
        $this->form_validation->set_rules('nama','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('nik_ibu','NIK Ibu','required|trim');
        $this->form_validation->set_rules('nama_ibu','Nama Ibu','required|trim');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required|trim');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('bpjs','BPJS','required|trim');
        $this->form_validation->set_rules('bb','Berat Badan','required|trim');
        $this->form_validation->set_rules('tb','Tinggi Badan','required|trim');
        $this->form_validation->set_rules('l2p','Alamat','required|trim');
        $this->form_validation->set_rules('lila','Lila','required|trim');
        $this->form_validation->set_rules('penyakit','Penyakit','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');

        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required|trim');
        if($this->form_validation->run() == false){
            view_admin('bayi','tambah', $data);
        }else{
            $this->Bayi_model->tambah();
            $this->session->set_flashdata('alert','alert-success');
            $this->session->set_flashdata('pesan','Data Berhasil Di Tambah');
            redirect('Bayi');
        }
    }

    public function edit($id){
        $data['title'] = "Tambah Data Bayi";
        $data['bayi'] = $this->db->get_where('bayi',['id_bayi' => $id])->row_array();
        $this->form_validation->set_rules('nama','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('nik_ibu','NIK Ibu','required|trim');
        $this->form_validation->set_rules('nama_ibu','Nama Ibu','required|trim');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required|trim');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('bpjs','BPJS','required|trim');
        $this->form_validation->set_rules('bb','Berat Badan','required|trim');
        $this->form_validation->set_rules('tb','Tinggi Badan','required|trim');
        $this->form_validation->set_rules('l2p','Alamat','required|trim');
        $this->form_validation->set_rules('lila','Lila','required|trim');
        $this->form_validation->set_rules('penyakit','Penyakit','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');

        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required|trim');
        if($this->form_validation->run() == false){
            view_admin('bayi','edit', $data);
        }else{
            $this->Bayi_model->editBayi($id);
            $this->session->set_flashdata('alert','alert-warning');
            $this->session->set_flashdata('pesan','Data Berhasil Di Edit');
            redirect('Admin_Bayi');
        }
    }

    public function hapus($id){
        $this->Bayi_model->delete($id);
        $this->session->set_flashdata('alert','alert-danger');
        $this->session->set_flashdata('pesan','Data Berhasil Di Hapus');
        redirect('Admin_Bayi');
    }
}