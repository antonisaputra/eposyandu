<?php

class Remaja_model extends CI_Model
{
    public function getRemaja()
    {
        $this->db->order_by('id_remaja', 'DESC');
        return $this->db->get('remaja')->result();
    }

    public function tambah()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'ttl' => $this->input->post('tanggal_lahir', true),
            'nama' => $this->input->post('nama', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
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

        $this->db->insert('remaja', $data);
    }

    public  function edit($id){
        $data = [
            'nama' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'ttl' => $this->input->post('tanggal_lahir', true),
            'nama' => $this->input->post('nama', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
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
        $this->db->where('id_remaja',$id);
        $this->db->update('remaja', $data);
    }
}
