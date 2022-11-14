<?php

class Admin_Remaja extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Remaja_model');
    }
    public function index(){
        $data['title'] = "Remaja";
        $data['remaja'] = $this->Remaja_model->getRemaja();
        view_admin('remaja','index', $data);
    }

    public function tambah(){
        $data['title'] = "Tambah Data Remaja";
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required|trim');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|trim');
        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required|trim');
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
        if($this->form_validation->run() == false){
            view_admin('remaja','tambah', $data);
        }else{
            $this->Remaja_model->tambah();
            $this->session->set_flashdata('alert','alert-success');
            $this->session->set_flashdata('pesan','Data Remaja Berhasil Di Tambah');
            redirect('Admin_Remaja');
        }
    }

    public function edit($id){
        $data['title'] = "Edit Data Remaja";
        $data['remaja'] = $this->db->get_where('remaja',['id_remaja' => $id])->row_array();
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required|trim');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|trim');
        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required|trim');
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
        if($this->form_validation->run() == false){
            view_admin('remaja','edit', $data);
        }else{
            $this->Remaja_model->edit($id);
            $this->session->set_flashdata('alert','alert-warning');
            $this->session->set_flashdata('pesan','Data Remaja Berhasil Di Tambah');
            redirect('Admin_Remaja');
        }
    }

    public function hapus($id){
        $this->db->where('id_remaja',$id);
        $this->db->delete('remaja');
        $this->session->set_flashdata('alert','alert-danger');
        $this->session->set_flashdata('pesan','Data Remaja Berhasil Di Hapus');
        redirect('Admin_Remaja');
    }

}