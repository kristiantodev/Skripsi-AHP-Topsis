<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Siswa | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datasiswa'] = $this->model_siswa->tampil_data()->result(); //menampilkan semua data

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_siswa/daftar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_siswa()
    {
        $data['judul'] = 'Tambah Siswa | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datasiswa'] = $this->model_siswa->tampil_data()->result(); //menampilkan semua data
        $data['kelas'] = $this->db->get('tbl_kelas')->result_array();

        //set rules validasi
        $this->form_validation->set_rules('nis', 'Nis', 'required|trim|is_unique[tbl_siswa.nis]', [
            'is_unique' => 'NIS sudah pernah Registrasi.',
            'trim' => 'NIS tidak boleh ada spasi.',
            'required' => 'NIS tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('nama_siswa', 'Nama_siswa', 'required', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('id_kelas', 'ID_kelas', 'required', [
            'required' => 'ID Kelas tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('jk', 'Jk', 'required', [
            'required' => 'Jenis Kelamin tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat tidak boleh kosong.'
        ]);


        //Jika form validasi salah 
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/data_siswa/tambah_siswa', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_siswa->tambah_siswa();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-info"> 
                <i class="mdi mdi-check-circle"></i> Siswa Baru telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_siswa');
        }
    }

    public function detail_siswa($nis = null)
    {
        $data['judul'] = 'Detail Siswa | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datasiswa'] = $this->model_siswa->data_id($nis);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_siswa/detail_siswa', $data);
        $this->load->view('templates/footer');
    }

    public function edit_siswa($nis = null)
    {
        $data['judul'] = 'Edit Siswa | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datasiswa'] = $this->model_siswa->data_id($nis);

        $data['kelas'] = $this->db->get('tbl_kelas')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_siswa/edit_siswa', $data);
        $this->load->view('templates/footer');
    }

    public function update_siswa()
    {
        //set rules validasi
        $this->form_validation->set_rules('nis', 'NIS', 'required|trim', [
            'trim' => 'NIS tidak boleh ada spasi.',
            'required' => 'NIS tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('nama_siswa', 'Nama_siswa', 'required', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('id_kelas', 'ID_kelas', 'required', [
            'required' => 'ID Kelas tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('jk', 'Jk', 'required', [
            'required' => 'Jenis Kelamin tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat tidak boleh kosong.'
        ]);

        // jika validasi salah
        if ($this->form_validation->run() == false) {
            redirect('data_siswa/edit_siswa');
        } else {
            // jika validasi benar
            $this->model_siswa->update_siswa();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-success"> 
                <i class="mdi mdi-check-circle"></i> Data Siswa telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_siswa');
        }
    }

    public function hapus_siswa($nis)
    {
        $this->model_siswa->hapus_siswa($nis);
        $this->session->set_flashdata('message', '
    	<div class="alert alert-danger"> 
        	<i class="mdi mdi-close-circle"></i> Data Siswa telah Dihapus !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            	<span aria-hidden="true">&times;</span> 
            </button>
        </div>');
        redirect('data_siswa');
    }
}
