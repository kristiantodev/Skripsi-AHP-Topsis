<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data User | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datauser'] = $this->model_user->tampil_data()->result(); //menampilkan semua data

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_user/daftar', $data);
        $this->load->view('templates/footer');
    }

    public function detail_user($id = null)
    {
        $data['judul'] = 'Detail User | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datauser'] = $this->model_user->data_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_user/detail_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_user()
    {
        $data['judul'] = 'Tambah User | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['level'] = $this->db->get('tbl_level')->result_array();

        //set rules validasi
        $this->form_validation->set_rules('nama_user', 'Nama_user', 'required', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_user.username]', [
            'is_unique' => 'Username sudah pernah Registrasi.',
            'trim' => 'Username tidak boleh ada spasi.',
            'required' => 'Username tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[passconfirm]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password minimal 5 karakter!',
            'required' => 'Password tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('passconfirm', 'Password', 'required|matches[password]', [
            'required' => 'Password tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'Email ini sudah pernah digunakan',
            'required' => 'Email tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required', [
            'required' => 'Level tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/data_user/tambah_user', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_user->tambah_user();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-info"> 
                <i class="mdi mdi-check-circle"></i> User Baru telah Ditambahkan !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_user');
        }
    }

    public function edit_user($id = null)
    {
        $data['judul'] = 'Edit User | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['level'] = $this->db->get('tbl_level')->result_array();

        $data['datauser'] = $this->db->get_where('tbl_user', ['id_user' => $id])->row();

        //set rules validasi
        $this->form_validation->set_rules('nama_user', 'Nama_user', 'required', [
            'required' => 'Nama tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'trim' => 'Username tidak boleh ada spasi.',
            'required' => 'Username tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required', [
            'required' => 'Level tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/data_user/edit_user', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $this->model_user->edit_user();
            $this->session->set_flashdata('message', '
        	<div class="alert alert-success"> 
                <i class="mdi mdi-check-circle"></i> Data User telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_user');
        }
    }

    public function hapus_user($username)
    {
        $item = $this->model_user->data_id($username);
        if ($item->image != "default.png") {
            $target = './assets/uploads/profil/' . $item->image;
            unlink($target);
            $this->model_user->hapus_user($username);

            $this->model_user->hapus_guru($username);
        } else {
            $this->model_user->hapus_user($username);

            $this->model_user->hapus_guru($username);
        }
        $this->session->set_flashdata('message', '
    	<div class="alert alert-danger"> 
            <i class="mdi mdi-close-circle"></i> Data User telah Dihapus !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            	<span aria-hidden="true">&times;</span> 
            </button>
        </div>');
        redirect('data_user');
    }

    //aktifkan status 
    public function aktif_status($id = null)
    {
        $this->model_user->aktif_status($id);
        $this->session->set_flashdata('message', '<div class="flash-data" data-nonaktif="User berhasil di Aktifkan"></div>');
        echo '<script>window.history.back();</script>';
    }

    //nonaktifkan status 
    public function nonaktif_status($id = null)
    {
        $this->model_user->nonaktif_status($id);
        $this->session->set_flashdata('message', '<div class="flash-data" data-nonaktif="User berhasil di Nonaktifkan"></div>');
        echo '<script>window.history.back();</script>';
    }

    public function change_password($id = null)
    {
        $data['judul'] = 'Change Password | Aplikasi Siswa Bermasalah';
        $data['session'] = $this->db->get_where('tbl_user', ['username' =>
        $this->session->userdata('username')])->row_array(); //session as
        $data['datauser'] = $this->model_user->data_id($id);

        //set rules validasi
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[passconfirm]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password minimal 5 karakter!',
            'required' => 'Password tidak boleh kosong.'
        ]);
        $this->form_validation->set_rules('passconfirm', 'Password', 'required|matches[password]', [
            'required' => 'Password tidak boleh kosong.'
        ]);

        //Jika form validasi salah
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/data_user/change_password', $data);
            $this->load->view('templates/footer');

            //jika form validasi benar
        } else {
            $change_pw = $this->input->post('id');
            $this->model_user->change_password($change_pw);
            $this->session->set_flashdata('message', '
        	<div class="alert alert-warning"> 
            	<i class="fas fa-lock"></i> Password telah Diubah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                	<span aria-hidden="true">&times;</span> 
                </button>
            </div>');
            redirect('data_user');
        }
    }
}
