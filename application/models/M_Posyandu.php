<?php

class M_Posyandu extends CI_Model
{
    public $tabel_bayi='bayi';
    public $tabel_ibuhamil='ibuhamil';
    public $tabel_ptm='ptm';
    public $tabel_remaja='remaja';
    public $tabel_lansia='lansia';
    public $tabel_stunting='stunting';

    public function posyandu_data()
    {
        $hasil = $this->db->query("Select * from bayi");
        return $hasil->result_array();
    }
    public function posyandu_data_byid($id)
    {
        $hasil = $this->db->query("Select * from bayi where id_bayi=$id");
        return $hasil->row_array();
    }


    // read data
    public function posyandu_data_bayi()
    {
        $this->db->order_by('id_bayi','DESC');
        return $this->db->get('bayi')->result();
    }














    
    public function posyandu_data_remaja($id_remaja)
    {
        $hasil = $this->db->query("Select * from remaja where id_remaja=$id_remaja");
        return $hasil->row();
    }

    public function posyandu_data_ptm($id_ptm)
    {
        $hasil = $this->db->query("Select * from ptm where id_ptm=$id_ptm");
        return $hasil->row();
    }

    public function posyandu_data_ibuhamil($id_ibuhamil)
    {
        $hasil = $this->db->query("Select * from ibuhamil where id_ibuhamil=$id_ibuhamil");
        return $hasil->row();
    }

    public function posyandu_data_lansia($id_lansia)
    {
        $hasil = $this->db->query("Select * from lansia where id_lansia=$id_lansia");
        return $hasil->row();
    }

    public function posyandu_data_stunting($id_stunting)
    {
        $hasil = $this->db->query("Select * from stunting where id_stunting=$id_stunting");
        return $hasil->row();
    }
   
// delete data
    public function hapus_posyandu_bayi($id_bayi)
    {
        $this->db->where('id_bayi', $id_bayi);
        $hapus = $this->db->delete('tb_bayi');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function hapus_posyandu_remaja($id_remaja)
    {
        $this->db->where('id_remaja', $id_remaja);
        $hapus = $this->db->delete('tb_remaja');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function hapus_posyandu_ptm($id_ptm)
    {
        $this->db->where('id_ptm', $id_ptm);
        $hapus = $this->db->delete('tb_ptm');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function hapus_posyandu_ibuhamil($id_ibuhamil)
    {
        $this->db->where('id_ibuhamil', $id_ibuhamil);
        $hapus = $this->db->delete('tb_ibuhamil');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function hapus_posyandu_lansia($id_lansia)
    {
        $this->db->where('id_lansia', $id_lansia);
        $hapus = $this->db->delete('tb_lansia');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function hapus_posyandu_stunting($id_stunting)
    {
        $this->db->where('id_stunting', $id_stunting);
        $hapus = $this->db->delete('tb_stunting');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }
    
    // tambah data

    public function tambah_posyandu_bayi($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_bayi');
    }

    public function tambah_posyandu_ibuhamil($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_ibuhamil');
    }

    public function tambah_posyandu_ptm($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_ptm');
    }

    public function tambah_posyandu_remaja($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_remaja');
    }

    public function tambah_posyandu_lansia($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_lansia');
    }

    public function tambah_posyandu_stunting($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_stunting');
    }

    // edit data
    public function edit_bayi($data, $id_bayi)
    {
        $this->db->set($data);
        $this->db->where('id_bayi', $id_bayi);
        $this->db->update('tb_bayi');
    }

    public function edit_posyandu_ibuhamil($data, $id_ibuhamil)
    {
        $this->db->set($data);
        $this->db->where('id_ibuhamil', $id_ibuhamil);
        $this->db->update('tb_ibuhamil');
    }

    public function edit_posyandu_remaja($data, $id_remaja)
    {
        $this->db->set($data);
        $this->db->where('id_remaja', $id_remaja);
        $this->db->update('tb_remaja');
    }

    public function edit_posyandu_ptm($data, $id_ptm)
    {
        $this->db->set($data);
        $this->db->where('id_ptm', $id_ptm);
        $this->db->update('tb_ptm');
    }

    public function edit_posyandu_lansia($data, $id_lansia)
    {
        $this->db->set($data);
        $this->db->where('id_lansia', $id_lansia);
        $this->db->update('tb_lansia');
    }

    public function edit_posyandu_stunting($data, $id_stunting)
    {
        $this->db->set($data);
        $this->db->where('id_stunting', $id_stunting);
        $this->db->update('tb_stunting');
    }
    
//edit by id
    public function get_data_by_id($id, $nama_tabel)
    {
        $hasil = $this->db->query("SELECT * FROM $nama_tabel
        WHERE id_bayi='$id'");

        return $hasil->row_array();
    }

}