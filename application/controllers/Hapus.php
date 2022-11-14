<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hapus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Posyandu');
        $this->load->model('M_Landing');
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