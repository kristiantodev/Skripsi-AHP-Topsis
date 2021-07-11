<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_guru');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Guru | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['dataguru'] = $this->model_guru->tampil_data()->result(); //menampilkan semua data

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_guru/daftar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_guru()
    {
        $data['judul'] = 'Tambah Guru | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as

        //set rules validasi
        $this->form_validation->set_rules('nip', 'Nip', 'required|trim|is_unique[tbl_guru.nip]', [
            'is_unique' => 'NIP sudah pernah Registrasi.',
            'trim' => 'NIP tidak boleh ada spasi.',
            'required' => 'NIP tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('nama_guru', 'nama_Guru', 'required', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('jk', 'Jk', 'required', [
            'required' => 'Jenis Kelamin tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'Email ini sudah pernah digunakan',
            'required' => 'Email tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/data_guru/tambah_guru', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_guru->tambah_guru();
            $this->model_guru->tambah_user();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-info"> 
                <i class="mdi mdi-check-circle"></i> Guru Baru telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_guru');
        }
    }

    public function detail_guru($nip = null)
    {
        $data['judul'] = 'Detail Guru | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['dataguru'] = $this->model_guru->data_id($nip);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_guru/detail_guru', $data);
        $this->load->view('templates/footer');
    }

    public function edit_guru($nip = null)
    {
        $data['judul'] = 'Edit Guru | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as

        $data['dataguru'] = $this->model_guru->data_id($nip);

        //set rules validasi
        $this->form_validation->set_rules('nip', 'Nip', 'required|trim', [
            'trim' => 'NIP tidak boleh ada spasi.',
            'required' => 'NIP tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('nama_guru', 'Nama_guru', 'required', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('jk', 'Jk', 'required', [
            'required' => 'Jenis Kelamin tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/data_guru/edit_guru', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_guru->edit_guru();
            $this->model_guru->edit_user();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-success"> 
                <i class="mdi mdi-check-circle"></i> Data Guru telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_guru');
        }
    }

    public function hapus_guru($nip)
    {
        $this->model_guru->hapus_guru($nip);
        $this->model_guru->hapus_user($nip);

        $this->session->set_flashdata('message', '
    	<div class="alert alert-danger"> 
            <i class="mdi mdi-close-circle"></i> Data Guru telah Dihapus !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            	<span aria-hidden="true">&times;</span> 
            </button>
        </div>');
        redirect('data_guru');
    }

    public function aktif_status_guru($nip = null)
    {
        $this->model_guru->aktif_status($nip);
        $this->session->set_flashdata('message', '<div class="flash-data" data-nonaktif="User berhasil di Aktifkan"></div>');
        echo '<script>window.history.back();</script>';
    }

    public function nonaktif_status_guru($nip = null)
    {
        $this->model_guru->nonaktif_status($nip);
        $this->session->set_flashdata('message', '<div class="flash-data" data-nonaktif="User berhasil di Nonaktifkan"></div>');
        echo '<script>window.history.back();</script>';
    }
}
