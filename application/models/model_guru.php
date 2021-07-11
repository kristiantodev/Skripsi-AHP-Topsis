<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_guru extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_user', 'tbl_guru.nip = tbl_user.username');
        $this->db->order_by('tbl_guru.nip', 'asc');
        return $this->db->get();
    }

    public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_user', 'tbl_guru.nip = tbl_user.username');
        $this->db->join('tbl_level', 'tbl_user.id_level = tbl_level.id_level');
        $this->db->where(['nip' => $id]);
        return $this->db->get('')->row();
    }

    public function tambah_guru()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama_guru" => $this->input->post('nama_guru', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->insert('tbl_guru', $data);
    }

    public function tambah_user()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "username" => $this->input->post('nip', true),
            "password" => password_hash($this->input->post('nip', true), PASSWORD_DEFAULT),
            "nama_user" => $this->input->post('nama_guru', true),
            "email" => $this->input->post('email', true),
            "image" => 'default.png',
            "id_level" => '2',
            "active" => '0',
            "date_created" => date('Y-m-d'),
        ];
        $this->db->insert('tbl_user', $data);
    }

    public function edit_guru()
    {
        $nip = $this->input->post('id');

        $data = [
            "nip" => $this->input->post('nip', true),
            "nama_guru" => $this->input->post('nama_guru', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->where(['nip' => $nip]);
        $this->db->update('tbl_guru', $data);
    }

    public function edit_user()
    {
        $nip = $this->input->post('id');

        $data = [
            "username" => $this->input->post('nip', true),
            "nama_user" => $this->input->post('nama_guru', true),
            "email" => $this->input->post('email', true),
        ];
        $this->db->where(['username' => $nip]);
        $this->db->update('tbl_user', $data);
    }

    public function hapus_guru($nip)
    {
        $this->db->where('nip', $nip);
        $this->db->delete('tbl_guru');
    }

    public function hapus_user($nip)
    {
        $this->db->where('username', $nip);
        $this->db->delete('tbl_user');
    }

    //aktifkan status 
    public function aktif_status($nip)
    {
        $data = [
            "active" => 1
        ];
        $this->db->where(['username' => $nip]);
        $this->db->update('tbl_user', $data);
    }

    //nonaktifkan status 
    public function nonaktif_status($nip)
    {
        $data = [
            "active" => 0
        ];
        $this->db->where(['username' => $nip]);
        $this->db->update('tbl_user', $data);
    }
}
