<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kriteria');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Kriteria | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['kriteria'] = $this->model_kriteria->tampil_data()->result();
        $data['sumbobot'] = $this->model_kriteria->total_bobot();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kriteria/daftar', $data);
        $this->load->view('templates/footer');
    }
}
