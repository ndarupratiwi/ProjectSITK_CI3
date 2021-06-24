<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->model('Siswa_model');
        $this->load->model('Akademik_model');
        $this->load->model('Report_model');
    }

    //FUNCTION DASHBOARD GURU
    public function index()
    {
        $this->template_guru->views('guru/dash_guru');
    }

    //FUNCTION MENU SISWA
    public function bio_siswa()
    {
        $data['biosiswa'] = $this->Siswa_model->getAll()->result();
        $this->template_guru->views('guru/bio_siswa', $data);
    }

    public function detail_siswa($id)
    {
        $where = array('id' => $id);
        $data['biosiswa'] = $this->Siswa_model->detail_siswa($where, 'tb_siswa')->result();
        $this->template_guru->views('guru/detail_siswa', $data);
    }

    //FUNCTION MENU MATERI PEMBELAJARAN
    public function materi_pembelajaran()
    {
        $data['materi'] = $this->Akademik_model->getAll()->result();
        $this->template_guru->views('guru/materi_pembelajaran', $data);
    }

    public function tambah_materi()
    {
        $this->template_guru->views('guru/tambah_materi');
    }

    public function input_materi()
    {
        $tema = $this->input->post('tema');
        $tanggal = $this->input->post('tanggal');
        $kel_materi = $this->input->post('kel_materi');
        //upload bukti pembayaran
        $materi = $_FILES['materi'];
        if ($materi = '') {
        } else {
            $config['upload_path'] = './uploads/materi';
            $config['allowed_types'] = 'pdf|docx|doc|xls|pptx';
            $config['overwrite'] = true;
            $config['max_size'] = 10240; //10MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('materi')) {
                echo "Upload Gagal";
                die();
            } else {
                $materi = $this->upload->data("file_name");
            }
        }

        $data = array(
            'tema' => $tema,
            'tanggal' => $tanggal,
            'kel_materi' => $kel_materi,
            'materi' => $materi
        );

        $this->Akademik_model->input_data($data, 'tb_akademik');
        redirect('guru/materi_pembelajaran');
    }

    public function edit_materi($id_materi)
    {
        $where = array('id_materi' => $id_materi);
        $data['materi'] = $this->Akademik_model->edit_data($where, 'tb_akademik')->result();
        $this->template_guru->views('guru/edit_materi', $data);
    }

    public function update_materi()
    {
        $id_materi = $this->input->post('id_materi');
        $tema = $this->input->post('tema');
        $tanggal = $this->input->post('tanggal');
        $kel_materi = $this->input->post('kel_materi');
        //update materi
        $materi = $_FILES['materi'];
        if ($materi = '') {
        } else {
            $config['upload_path'] = './uploads/materi';
            $config['allowed_types'] = 'pdf|docx|doc|xls|pptx';
            $config['overwrite'] = true;
            $config['max_size'] = 10240; //10MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('materi')) {
                $data = array(
                    'tema' => $tema,
                    'tanggal' => $tanggal,
                    'kel_materi' => $kel_materi
                );

                $where = array(
                    'id_materi' => $id_materi
                );

                $this->Akademik_model->update_data($where, $data, 'tb_akademik');
                redirect('Guru/materi_pembelajaran');
            } else {
                $materi = $this->upload->data("file_name");
            }
        }

        $data = array(
            'tema' => $tema,
            'tanggal' => $tanggal,
            'kel_materi' => $kel_materi,
            'materi' => $materi
        );

        $where = array(
            'id_materi' => $id_materi
        );

        $this->Akademik_model->update_data($where, $data, 'tb_akademik');
        redirect('Guru/materi_pembelajaran');
    }

    public function hapus_materi($id_materi)
    {
        $where = array('id_materi' => $id_materi);
        $this->Akademik_model->hapus_data($where, 'tb_akademik');
        redirect('Guru/materi_pembelajaran');
    }

    //FUNCTION MENU REPORT
    public function report()
    {
        $data['report'] = $this->Report_model->getAll()->result();
        $this->template_guru->views('guru/report', $data);
    }

    public function tambah_report()
    {
        $this->template_guru->views('guru/tambah_report');
    }

    public function input_report()
    {
        $no_induk = $this->input->post('no_induk');
        $nama_siswa = $this->input->post('nama_siswa');
        $laporan = $this->input->post('laporan');
        $tgl_report = $this->input->post('tgl_report');
        $kel_report = $this->input->post('kel_report');

        $data = array(
            'no_induk' => $no_induk,
            'nama_siswa' => $nama_siswa,
            'laporan' => $laporan,
            'tgl_report' => $tgl_report,
            'kel_report' => $kel_report
        );
        $this->Report_model->input_data($data, 'tb_report');
        redirect('Guru/report');
    }

    public function edit_report($id)
    {
        $where = array('id' => $id);
        $data['report'] = $this->Report_model->edit_data($where, 'tb_report')->result();
        $this->template_guru->views('guru/edit_report', $data);
    }

    public function update_report()
    {
        $id = $this->input->post('id');
        $no_induk = $this->input->post('no_induk');
        $nama_siswa = $this->input->post('nama_siswa');
        $laporan = $this->input->post('laporan');
        $tgl_report = $this->input->post('tgl_report');
        $kel_report = $this->input->post('kel_report');

        $data = array(
            'no_induk' => $no_induk,
            'nama_siswa' => $nama_siswa,
            'laporan' => $laporan,
            'tgl_report' => $tgl_report,
            'kel_report' => $kel_report
        );

        $where = array(
            'id' => $id
        );

        $this->Report_model->update_data($where, $data, 'tb_report');
        redirect('Guru/report');
    }

    public function hapus_report($id)
    {
        $where = array('id' => $id);
        $this->Report_model->hapus_data($where, 'tb_report');
        redirect('Guru/report');
    }
}
