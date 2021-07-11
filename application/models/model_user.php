<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_user extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_level', 'tbl_user.id_level = tbl_level.id_level');
        $this->db->order_by('tbl_user.id_level', 'asc');
        $this->db->order_by('tbl_user.username', 'asc');
        return $this->db->get();
    }

    public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_level', 'tbl_user.id_level = tbl_level.id_level');
        $this->db->where(['id_user' => $id]);
        return $this->db->get('')->row();
    }

    public function tambah_user()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "username" => htmlspecialchars($this->input->post('username', true)),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "nama_user" => htmlspecialchars($this->input->post('nama_user', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "image" => 'default.png',
            "id_level" => $this->input->post('level', true),
            "active" => '0',
            "date_created" => date('Y-m-d'),
        ];
        $this->db->insert('tbl_user', $data);
    }

    public function edit_user()
    {
        $id_user = $this->input->post('id');
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $level = $this->input->post('level');

        //cek jika ada gambar
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $ext      = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $new_name = strtolower($username) . '.' . strtolower($ext);
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '3072';
            $config['upload_path']   = './assets/uploads/profil/';
            $config['file_name']     = $new_name;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                //untuk menghapus data file secara otomatis
                $item = $this->data_id($id_user);
                if ($item->image != "default.png") {
                    $target = './assets/uploads/profil/' . $item->image;
                    unlink($target);
                }

                // upload foto dan edit di database
                $upload_image = $this->upload->data('file_name');
                $this->db->set('image', $upload_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        //update
        $this->db->set('nama_user', $nama_user);
        $this->db->set('username', $username);
        $this->db->set('email', $email);
        $this->db->set('id_level', $level);

        $this->db->where('id_user', $id_user);
        $this->db->update('tbl_user');
    }

    public function hapus_user($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('tbl_user');
    }

    public function hapus_guru($username)
    {
        $this->db->where('nip', $username);
        $this->db->delete('tbl_guru');
    }

    //aktifkan status 
    public function aktif_status($id)
    {
        $data = [
            "active" => 1
        ];
        $this->db->where(['id_user' => $id]);
        $this->db->update('tbl_user', $data);
    }

    //nonaktifkan status 
    public function nonaktif_status($id)
    {
        $data = [
            "active" => 0
        ];
        $this->db->where(['id_user' => $id]);
        $this->db->update('tbl_user', $data);
    }

    public function change_password($change_pw)
    {
        $data = [
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];
        $this->db->where(['id_user' => $change_pw]);
        $this->db->update('tbl_user', $data);
    }
}
