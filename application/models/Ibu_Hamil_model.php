<?php

class Ibu_Hamil_model extends CI_Model{
    public function getIbuHamil(){
        $this->db->order_by('id_ibuhamil','DESC');
        return $this->db->get('ibuhamil')->result_object();
    }

    public function tambah(){
        $data = [
            'nama' => $this->input->post('nama', true),
            'un' => $this->input->post('un', true),
            'ttl' => $this->input->post('tanggal_lahir', true),
            'temp' => $this->input->post('temp', true),
            'nik' => $this->input->post('nik', true),
            'alamat' => $this->input->post('alamat', true),
            'bpjs' => $this->input->post('bpjs', true),
            'bb' => $this->input->post('bb', true),
            'tb' => $this->input->post('tb', true),
            'l2p' => $this->input->post('l2p', true),
            'lila' => $this->input->post('lila', true),
            'penyakit' => $this->input->post('penyakit', true),
            'darah' => $this->input->post('darah', true),
            'ket' => $this->input->post('keterangan', true),
        ];

        $this->db->insert('ibuhamil', $data);
    }
}