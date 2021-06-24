<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Pembayaran_model');
        $this->load->model('Akademik_model');
        $this->load->model('Report_model');
        $this->load->model('Rincianbayar_model');
    }

    public function index()
    {
        $this->template_siswa->views('siswa/dash_siswa');
    }

    //FUNCTION MENU PENDAFTARAN
    public function pendaftaran()
    {
        $this->template_siswa->views('siswa/pendaftaran');
    }


    public function input_siswa()
    {
        $id = $this->input->post('id');
        // $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $ttl = $this->input->post('ttl');
        $jenkel = $this->input->post('jenkel');
        $agama = $this->input->post('agama');
        $nama_ayah = $this->input->post('nama_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $anak_ke = $this->input->post('anak_ke');
        $hubungan_keluarga = $this->input->post('hubungan_keluarga');
        $pend_terakhir_ayah = $this->input->post('pend_terakhir_ayah');
        $pend_terakhir_ibu = $this->input->post('pend_terakhir_ibu');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $tapel = $this->input->post('tapel');
        $kelompok = $this->input->post('kelompok');
        //upload gambar
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './uploads/foto_siswa';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'id' => $id,
            // 'username' => $username,
            'nama_lengkap' => $nama_lengkap,
            'ttl' => $ttl,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'nama_ayah' => $nama_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'anak_ke' => $anak_ke,
            'hubungan_keluarga' => $hubungan_keluarga,
            'pend_terakhir_ayah' => $pend_terakhir_ayah,
            'pend_terakhir_ibu' => $pend_terakhir_ibu,
            'alamat' => $alamat,
            'email' => $email,
            'telp' => $telp,
            'tapel' => $tapel,
            'kelompok' => $kelompok,
            'foto' => $foto
        );
        $this->Siswa_model->input_data($data, 'tb_siswa');
        redirect('siswa/berhasil_daftar');
    }

    public function berhasil_daftar()
    {
        $this->template_siswa->views('siswa/berhasil_daftar');
    }

    public function rincian_pembayaran()
    {
        $this->template_siswa->views('siswa/rincian_pembayaran');
    }


    //FUNCTION MENU PEMBAYARAN
    public function upload_pembayaran()
    {
        $this->template_siswa->views('siswa/upload_pembayaran');
    }

    public function input_pembayaran()
    {
        $id = $this->input->post('id');
        $nasabah = $this->input->post('nasabah');
        $tgl_pembayaran = $this->input->post('tgl_pembayaran');
        $nama_siswa = $this->input->post('nama_siswa');
        $kelompok = $this->input->post('kelompok');
        //upload bukti pembayaran
        $bukti = $_FILES['bukti'];
        if ($bukti = '') {
        } else {
            $config['upload_path'] = './uploads/bukti_pembayaran';
            $config['allowed_types'] = 'jpeg|jpg|png|svg|pdf';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('bukti')) {
                echo "Upload Gagal";
                die();
            } else {
                $bukti = $this->upload->data("file_name");
            }
        }

        $data = array(
            'id' => $id,
            'nasabah' => $nasabah,
            'tgl_pembayaran' => $tgl_pembayaran,
            'nama_siswa' => $nama_siswa,
            'kelompok' => $kelompok,
            'bukti' => $bukti
        );

        $this->Pembayaran_model->input_data($data, 'tb_pembayaran');
        redirect('siswa/berhasil_uploadpembayaran');
    }

    public function berhasil_uploadpembayaran()
    {
        $this->template_siswa->views('siswa/berhasil_uploadpembayaran');
    }

    public function search_pembayaran($nasabah, $nama_siswa)
    {
        $where = array('nasabah' => $nasabah);
        $where = array('nama_siswa' => $nama_siswa);
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($where, 'tb_pembayaran')->result();
        $this->template_siswa->views('siswa/v_konfirm_pembayaran', $data);
    }

    public function konfirm_pembayaran()
    {
        $this->template_siswa->views('siswa/konfirm_pembayaran');
    }

    //FUNCTION MENU BIODATA
    public function biodata()
    {
        $data['siswa'] = $this->Siswa_model->getAll()->result();
        $this->template_siswa->views('siswa/biodata.php', $data);
    }


    //FUNCTION MENU AKADEMIK
    public function exercise_siswa()
    {
        $data['materi'] = $this->Akademik_model->getAll()->result();
        $this->template_siswa->views('siswa/exercise_siswa', $data);
    }

    public function report_siswa()
    {
        $data['report'] = $this->Report_model->getAll()->result();
        $this->template_siswa->views('siswa/report_siswa', $data);
    }

    public function search_report()
    {
        $this->template_siswa->views('siswa/search_report');
    }

    public function games()
    {
        $this->template_siswa->views('siswa/games');
    }

    public function mainyuk()
    {
        $this->load->view('siswa/mainyuk');
    }

    //FUNCTION MENU USER UPDATE
    public function update_akun()
    {
        $this->template_siswa->views('siswa/update_akun');
    }
}
