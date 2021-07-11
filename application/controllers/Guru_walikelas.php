<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_walikelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_sekolah');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['sekolah'] = $this->model_sekolah->tampil_data()->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('guru_walikelas/dashboard', $data);
        $this->load->view('templates/footer');
    }
}
