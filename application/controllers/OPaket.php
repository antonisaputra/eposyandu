<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OPaket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Paket');
    }

    public function tambah_paket()
    {
    }
    public function edit_paket()
    {
    }

    
    public function delete_paket($id)
    {
        $lakukan = $this->M_Paket->hapus_paket($id);
        if ($lakukan = "berhasil") {
            redirect('halaman/paket');
        } else {
            echo "Gagal Menghapus";
        }
    }
}