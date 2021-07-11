<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_siswa extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_siswa.id_kelas = tbl_kelas.id_kelas');
        $this->db->order_by('tbl_siswa.nis', 'asc');
        return $this->db->get();
    }

    // public function tampil_kelas()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_siswa');
    //     $this->db->join('tbl_kelas', 'tbl_siswa.id_kelas = tbl_kelas.id_kelas');
    //     $this->db->group_by('tbl_siswa.id_kelas');
    //     return $this->db->get();
    // }

    public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_siswa.id_kelas = tbl_kelas.id_kelas');
        $this->db->where(['nis' => $id]);
        return $this->db->get('')->row();
    }

    public function tambah_siswa()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "id_kelas" => $this->input->post('id_kelas', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->insert('tbl_siswa', $data);
    }

    public function update_siswa()
    {
        $nis = $this->input->post('nis', true);
        $nama_siswa = $this->input->post('nama_siswa', true);
        $id_kelas = $this->input->post('id_kelas', true);
        $jk = $this->input->post('jk', true);
        $alamat = $this->input->post('alamat', true);

        $this->db->set('nis', $nis);
        $this->db->set('nama_siswa', $nama_siswa);
        $this->db->set('id_kelas', $id_kelas);
        $this->db->set('jk', $jk);
        $this->db->set('alamat', $alamat);
        $this->db->where('nis', $nis);
        $this->db->update('tbl_siswa');
    }

    public function hapus_siswa($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->delete('tbl_siswa');
    }
}
