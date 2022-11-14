<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OArsitek extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Architect');
    }

    public function add_arsitek()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|trim');
        $this->form_validation->set_rules('perusahaan', 'perusahaan', 'required|trim');
        $this->form_validation->set_rules('wa', 'wa', 'required|trim');
        $this->form_validation->set_rules('instagram', 'instagram', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');

        if ($this->form_validation->run()) {
            $nama = $_POST['nama'];
            $pekerjaan = $_POST['pekerjaan'];
            $perusahaan = $_POST['perusahaan'];
            $wa = $_POST['wa'];
            $instagram = $_POST['instagram'];
            $alamat = $_POST['alamat'];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/arsitek/img';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'pekerjaan' => $pekerjaan,
                        'perusahaan' => $perusahaan,
                        'no_wa' => $wa,
                        'instagram' => $instagram,
                        'foto' => 'assets/arsitek/img/' . $new_image
                    ];

                    $this->M_Architect->tambah_arsitek($data);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('halaman/arsitek'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
            redirect(base_url('halaman/add_arsitek'));
        }
    }
    public function edit_arsitek($id)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|trim');
        $this->form_validation->set_rules('perusahaan', 'perusahaan', 'required|trim');
        $this->form_validation->set_rules('wa', 'wa', 'required|trim');
        $this->form_validation->set_rules('instagram', 'instagram', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');

        if ($this->form_validation->run()) {
            $nama = $_POST['nama'];
            $pekerjaan = $_POST['pekerjaan'];
            $perusahaan = $_POST['perusahaan'];
            $wa = $_POST['wa'];
            $instagram = $_POST['instagram'];
            $alamat = $_POST['alamat'];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image != null) {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']      = '2048';
                    $config['upload_path']   = './assets/arsitek/img';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');

                        $data = [
                            'nama' => $nama,
                            'alamat' => $alamat,
                            'pekerjaan' => $pekerjaan,
                            'perusahaan' => $perusahaan,
                            'no_wa' => $wa,
                            'instagram' => $instagram,
                            'foto' => 'assets/arsitek/img/' . $new_image
                        ];

                        $this->M_Architect->edit_arsitek($data, $id);;
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
                redirect(base_url('halaman/arsitek'));
            } else {
                $data = [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'pekerjaan' => $pekerjaan,
                    'perusahaan' => $perusahaan,
                    'no_wa' => $wa,
                    'instagram' => $instagram
                ];

                $this->M_Architect->edit_arsitek($data, $id);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
                redirect(base_url('halaman/arsitek'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Diedit!</div>');
            redirect(base_url('halaman/edit_arsitek'));
        }
    }
    public function delete_arsitek($id)
    {
        $lakukan = $this->M_Architect->hapus_arsitek($id);
        if ($lakukan = "berhasil") {
            redirect('halaman/arsitek');
        } else {
            echo "Gagal Menghapus";
        }
    }
}