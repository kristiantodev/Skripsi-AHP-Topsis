<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index(){

      $nip = $this->session->userdata('username');

      $query = $this->db->query("SELECT * FROM tbl_walikelas INNER JOIN tbl_kelas ON tbl_kelas.id_kelas=tbl_walikelas.id_kelas
INNER JOIN tbl_guru ON tbl_guru.id_guru = tbl_walikelas.id_guru
INNER JOIN tbl_siswa ON tbl_siswa.id_kelas = tbl_walikelas.id_walikelas
WHERE tbl_guru.nip = '$nip'");

      $query2 = $this->db->query("SELECT * FROM tbl_alternatif INNER JOIN tbl_siswa ON tbl_siswa.id_siswa = tbl_alternatif.id_siswa
INNER JOIN tbl_periode ON tbl_periode.id_periode = tbl_alternatif.id_periode
WHERE tbl_alternatif.id_walikelas = '$nip'");

      $this->db->select('*');
      $this->db->join('tbl_prioritas', 'tbl_prioritas.id_prioritas = tbl_kriteria.id_prioritas');
      $this->db->where('tbl_kriteria.id_kriteria',1);
      $this->db->from('tbl_kriteria');
      $c1 = $this->db->get();

      $this->db->select('*');
      $this->db->join('tbl_prioritas', 'tbl_prioritas.id_prioritas = tbl_kriteria.id_prioritas');
      $this->db->where('tbl_kriteria.id_kriteria',2);
      $this->db->from('tbl_kriteria');
      $c2 = $this->db->get();

      $this->db->select('*');
      $this->db->join('tbl_prioritas', 'tbl_prioritas.id_prioritas = tbl_kriteria.id_prioritas');
      $this->db->where('tbl_kriteria.id_kriteria',3);
      $this->db->from('tbl_kriteria');
      $c3 = $this->db->get();

      $this->db->select('*');
      $this->db->join('tbl_prioritas', 'tbl_prioritas.id_prioritas = tbl_kriteria.id_prioritas');
      $this->db->where('tbl_kriteria.id_kriteria',4);
      $this->db->from('tbl_kriteria');
      $c4 = $this->db->get();

      $data=array(
            "alternatif"=>$query->result(),
            "alternatifPenilaian"=>$query2->result(),
            "c1"=>$c1->row(),
            "c2"=>$c2->row(),
            "c3"=>$c3->row(),
            "c4"=>$c4->row(),
            "dataNilai"=>$this->db->get('tbl_nilai_kriteria')->result(),
            "periodeku" => $this->db->get_where('tbl_periode', ['status'=> 1])->row(),
            "judul"=>'Kriteria | Aplikasi Siswa Bermasalah',
            "session"=>$this->db->get_where('tbl_user', ['username' =>
                       $this->session->userdata('username')])->row_array()
      );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('guru_walikelas/penilaian', $data);
        $this->load->view('templates/footer');

    }


  public function tambah(){
    $check = $this->input->post('pilihanku');
    for ($i=0; $i < sizeof($check); $i++) { 
            $data = array(
                    'id_periode' => $_POST['id_periode'],
                    'id_siswa'=> $check[$i],
                    'id_walikelas' => $this->session->userdata('username'),
                    'status_isi_nilai' => 2
                );
             $this->db->insert('tbl_alternatif',$data);
          }

            $this->session->set_flashdata('sukses',"Alternatif berhasil ditambahkan!");
            redirect('penilaian/');
  }

  public function beri_penilaian()
    {
        $this->form_validation->set_rules('id_alternatif', 'id_alternatif', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('penilaian/');
        }else{
            $data=array(
                "id_alternatif"=>$_POST['id_alternatif'],
                "nis"=>"0",
                "nilai_c1"=>$_POST['c1'],
                "nilai_c2"=>$_POST['c2'],
                "nilai_c3"=>$_POST['c3'],
                "nilai_c4"=>$_POST['c4']
            );
            $this->db->insert('tbl_nilai_kriteria',$data);

            $data2=array(
                "status_isi_nilai"=>1
            );
            $this->db->where('id_alternatif', $_POST['id_alternatif']);
            $this->db->update('tbl_alternatif',$data2);

            $this->session->set_flashdata('sukses',"Siswa berhasil dinilai !!");
            redirect('penilaian');
        }
    }


}
