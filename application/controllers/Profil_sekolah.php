<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_sekolah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_sekolah');
    }

    public function index()
    {
        $data['judul'] = 'Profil Sekolah | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['sekolah'] = $this->db->get('tbl_sekolah')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/profil_sekolah/sekolah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        $data['judul'] = 'Edit Profil Sekolah | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['sekolah'] = $this->db->get_where('tbl_sekolah', ['id_sekolah' => $id])->row();

        //set rules form validasi
        $this->form_validation->set_rules('nama_sekolah', 'nama_sekolah', 'required', [
            'required' => 'Nama sekolah tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('slogan', 'slogan', 'required', [
            'required' => 'Slogan tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required', [
            'required' => 'Telepon tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'Email tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('perizinan', 'perizinan', 'required', [
            'required' => 'Perizinan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/profil_sekolah/edit_sekolah', $data);
            $this->load->view('templates/footer');
        } else {

            $id_sekolah = $this->input->post('id');
            $this->model_sekolah->edit($id_sekolah);
            $this->session->set_flashdata('message', '
        	<div class="alert alert-success"> 
                <i class="mdi mdi-check-circle"></i> Profil Sekolah telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('profil_sekolah');
        }
    }
}
