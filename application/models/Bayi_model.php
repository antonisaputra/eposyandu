<?php

class Bayi_model extends CI_Model{
    public function getBayi(){
        $this->db->order_by('id_bayi','DESC');
        return $this->db->get('bayi')->result();
    }

    public function tambah(){
        $data = [
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'nama' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'nik_ibu' => $this->input->post('nik_ibu', true),
            'alamat' => $this->input->post('alamat', true),
            'bpjs' => $this->input->post('bpjs', true),
            'bb' => $this->input->post('bb', true),
            'tb' => $this->input->post('tb', true),
            'l2p' => $this->input->post('l2p', true),
            'lila' => $this->input->post('lila', true),
            'penyakit' => $this->input->post('penyakit', true),
            'keterangan' => $this->input->post('keterangan', true)
        ];

        $this->db->insert('bayi', $data);
    }

    public function editBayi($id){
        $data = [
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'nama' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'nik_ibu' => $this->input->post('nik_ibu', true),
            'alamat' => $this->input->post('alamat', true),
            'bpjs' => $this->input->post('bpjs', true),
            'bb' => $this->input->post('bb', true),
            'tb' => $this->input->post('tb', true),
            'l2p' => $this->input->post('l2p', true),
            'lila' => $this->input->post('lila', true),
            'penyakit' => $this->input->post('penyakit', true),
            'keterangan' => $this->input->post('keterangan', true)
        ];
        $this->db->where('id_bayi', $id);
        $this->db->update('bayi', $data);
    }

    public function delete($id){
        $this->db->where('id_bayi', $id);
        $this->db->delete('bayi');
    }
}