<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_profilku extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_level', 'tbl_user.id_level = tbl_level.id_level');
        return $this->db->get()->row();
    }

    public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_level', 'tbl_user.id_level = tbl_level.id_level');
        $this->db->where(['id_user' => $id]);
        return $this->db->get('')->row();
    }

    public function edit_profil()
    {
        $id_user = $this->input->post('id');
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $email = $this->input->post('email');

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

        $this->db->where('id_user', $id_user);
        $this->db->update('tbl_user');
    }
}
