<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_spk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function bobot(){

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
            "c1"=>$c1->row(),
            "c2"=>$c2->row(),
            "c3"=>$c3->row(),
            "c4"=>$c4->row(),
            "judul"=>'Kriteria | Aplikasi Siswa Bermasalah',
            "session"=>$this->db->get_where('tbl_user', ['username' =>
                       $this->session->userdata('username')])->row_array()
      );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_spk/bobot', $data);
        $this->load->view('templates/footer');

    }


    public function ranking(){

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

      $query = $this->db->query("SELECT * FROM tbl_nilai_kriteria INNER JOIN tbl_alternatif ON tbl_alternatif.id_alternatif = tbl_nilai_kriteria.id_alternatif INNER JOIN tbl_siswa ON tbl_siswa.id_siswa = tbl_alternatif.id_siswa INNER JOIN tbl_periode ON tbl_periode.id_periode = tbl_alternatif.id_periode WHERE tbl_periode.status=1");

      $data=array(
            "c1"=>$c1->row(),
            "c2"=>$c2->row(),
            "c3"=>$c3->row(),
            "c4"=>$c4->row(),
            "alternatif"=>$query->result(),
            "periodeAktif" => $this->db->get_where('tbl_periode', ['status'=> 1])->row(),
            "judul"=>'Kriteria | Aplikasi Siswa Bermasalah',
            "session"=>$this->db->get_where('tbl_user', ['username' =>
                       $this->session->userdata('username')])->row_array()
      );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_spk/ranking', $data);
        $this->load->view('templates/footer');

    }


     public function edit()
    {
        $this->form_validation->set_rules('bobot1', 'bobot1', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('data_spk/bobot');
        }else{
            
            $data=array(
                "bobot"=>$_POST['bobot1']
            );
            $this->db->where('id_kriteria', 1 );
            $this->db->update('tbl_kriteria',$data);

            $data2=array(
                "bobot"=>$_POST['bobot2']
            );
            $this->db->where('id_kriteria', 2 );
            $this->db->update('tbl_kriteria',$data2);

            $data3=array(
                "bobot"=>$_POST['bobot3']
            );
            $this->db->where('id_kriteria', 3 );
            $this->db->update('tbl_kriteria',$data3);

            $data4=array(
                "bobot"=>$_POST['bobot4']
            );
            $this->db->where('id_kriteria', 4 );
            $this->db->update('tbl_kriteria',$data4);

            $this->session->set_flashdata('sukses',"Data Bobot Kriteria Berhasil diupdate!!");
            redirect('data_spk/bobot');
        }
    }


}
