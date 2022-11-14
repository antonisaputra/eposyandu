<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
        $this->load->library('form_validation');
        
    }

    public function add_bayi()
    {
  
        $data['page'] = "bayi_page";
        $data['title'] = "bayi&balita";
                                        
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('bpjs', 'bpjs', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('bb', 'bb', 'required|trim');
        $this->form_validation->set_rules('tb', 'tb', 'required|trim');
        $this->form_validation->set_rules('l2p', 'l2p', 'required|trim');
        $this->form_validation->set_rules('lila', 'lila', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('edit', 'edit', 'required|trim');

        if ($this->form_validation->run()) {
            $nama = $_POST['nama'];
            $nama_ibu = $_POST['nama_ibu'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $nik_ibu = $_POST['nik_ibu'];
            $alamat = $_POST['alamat'];
            $bpjs = $_POST['bpjs'];
            $bb = $_POST['bb'];
            $tb = $_POST['tb'];
            $lila = $_POST['lila'];
            $l2p = $_POST['l2p'];
            $keterangan = $_POST['keterangan'];
            $edit = $_POST['edit'];
            

            $data = [
                    'nama' => $nama,
                    'nama_ibu' => $nama_ibu,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tanggal_lahir' => $tanggal_lahir,
                    'tempat_lahir' => $tempat_lahir,
                    'nik_ibu' => $nik_ibu,
                    'alamat' => $alamat,
                    'bpjs' => $bpjs,
                    'bb' => $bb,
                    'tb' => $tb,
                    'lila' => $lila,
                    'l2p' => $l2p,
                    'keterangan' => $keterangan,
                    'edit' => $edit,
                    
                ];
            $this->M_Posyandu->tambah_bayi($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('halaman/bayi'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
            redirect(base_url('halaman/add_bayi_page'));
        }
    }
    // editttt
    public function edit_bayi($id_bayi)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('bpjs', 'bpjs', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('bb', 'bb', 'required|trim');
        $this->form_validation->set_rules('tb', 'tb', 'required|trim');
        $this->form_validation->set_rules('l2p', 'l2p', 'required|trim');
        $this->form_validation->set_rules('lila', 'lila', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        // $this->form_validation->set_rules('edit', 'edit', 'required|trim');

        if ($this->form_validation->run()) {
            $nama = $_POST['nama'];
            $nama_ibu = $_POST['nama_ibu'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $nik_ibu = $_POST['nik_ibu'];
            $alamat = $_POST['alamat'];
            $bpjs = $_POST['bpjs'];
            $bb = $_POST['bb'];
            $tb = $_POST['tb'];
            $lila = $_POST['lila'];
            $l2p = $_POST['l2p'];
            $keterangan = $_POST['keterangan'];
            // $edit = $_POST['edit'];

            $data = [
                'nama' => $nama,
                'nama_ibu' => $nama_ibu,
                'jenis_kelamin' => $jenis_kelamin,
                'tanggal_lahir' => $tanggal_lahir,
                'tempat_lahir' => $tempat_lahir,
                'nik_ibu' => $nik_ibu,
                'alamat' => $alamat,
                'bpjs' => $bpjs,
                'bb' => $bb,
                'tb' => $tb,
                'lila' => $lila,
                'l2p' => $l2p,
                'keterangan' => $keterangan,
                // 'edit' => $edit,
                    
            ];

            $this->M_Posyandu->edit_bayi($data, $id_bayi);
             
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
            redirect(base_url('jenisposyandu/bayi/laporan_bayi'));
                
        } else {
                // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gagal Diedit!</div>');
                // redirect(base_url('jenisposyandu/bayi/laporan_bayi'));
                echo "errorr cok";
         }
    }

    public function delete_bayi($id_bayi)
    {
        $lakukan = $this->M_posyandu->hapus_bayi($id_bayi);
        if ($lakukan = "berhasil") {
            redirect('hapus/bayi');
        } else {
            echo "Gagal Menghapus";
        }
    }



}
