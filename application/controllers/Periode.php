<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_periode');
        $this->load->model('model_siswa');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Periode | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['periode'] = $this->model_periode->tampil_data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/periode/daftar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_periode()
    {
        $data['judul'] = 'Tambah Periode | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as

        //set rules validasi
        $this->form_validation->set_rules('tahun_akademik', 'Tahun_akademik', 'required', [
            'required' => 'Tahun Akademik tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('semester', 'Semester', 'required', [
            'required' => 'Semester tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/periode/tambah_periode', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_periode->tambah_periode();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-info"> 
            	<i class="mdi mdi-check-circle"></i> Periode Baru telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('periode');
        }
    }

    public function edit_periode($id = null)
    {
        $data['judul'] = 'Edit Periode | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as

        $data['periode'] = $this->model_periode->data_id($id);

        //set rules validasi
        $this->form_validation->set_rules('tahun_akademik', 'Tahun_akademik', 'required', [
            'required' => 'Tahun Periode tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('semester', 'Semester', 'required', [
            'required' => 'Semester tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/periode/edit_periode', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_periode->edit_periode();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-success"> 
            	<i class="mdi mdi-check-circle"></i> Periode telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('periode');
        }
    }

    public function hapus_periode($id)
    {
        $this->model_periode->hapus_periode($id);
        // $this->model_periode->hapus_alternatif($id);
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger"> 
            <i class="mdi mdi-close-circle"></i> Periode telah Dihapus !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">&times;</span> 
            </button>
        </div>');
        redirect('periode');
    }

    public function aktif_status_periode($id = null)
    {
        $this->model_periode->aktif_status($id);
        echo '<script>window.history.back();</script>';
    }

    public function nonaktif_status_periode($id = null)
    {
        $this->model_periode->nonaktif_status($id);
        echo '<script>window.history.back();</script>';
    }

    // ======================DATA ALTERNATIF======================

    public function daftar_alternatif($id_periode = null)
    {
        $data['judul'] = 'Daftar Alternatif | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as

        $data['periode'] = $this->db->get('tbl_periode')->result_array();
        $data['id_periode'] = $id_periode;
        $data['alternatif'] = $this->model_periode->alternatif($id_periode)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/periode/daftar_alternatif', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_alternatif($filter = null)
    {
        $data['judul'] = 'Tambah Alternatif | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as

        $filter = [
            "id_siswa" => $this->input->post('id_siswa', true),
        ];

        $data['siswa1'] = $this->db->get('tbl_siswa')->result_array();
        $data['siswa2'] = $this->model_periode->tampil_siswa($filter);
        $data['filter'] = $filter;

        if (isset($filter)) {
            $data['judul'] = 'Tambah Alternatif | Aplikasi Siswa Bermasalah';
            $data['session'] = $this->db->get_where('tbl_user', ['username' =>
            $this->session->userdata('username')])->row_array(); //session as
            $data['siswa1'] = $this->db->get('tbl_siswa')->result_array();

            $data['filter'] = $filter;
            $data['siswa2'] = $this->model_periode->tampil_siswa($filter);

            // var_dump($data['filter']);
            // die();
            // var_dump($data['siswa2']);
            // die();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/periode/tambah_alternatif', $data);
            $this->load->view('templates/footer');
        } else {
            $data['judul'] = 'Tambah Alternatif | Aplikasi Siswa Bermasalah';
            $data['session'] = $this->db->get_where('tbl_user', ['username' =>
            $this->session->userdata('username')])->row_array(); //session as

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/periode/tambah_alternatif', $data);
            $this->load->view('templates/footer');
        }
    }
}
