<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Pegawai_model');
        $this->load->model('User_model');
        $this->load->model('Rincianbayar_model');
        $this->load->model('Pembayaran_model');
        $this->load->model('Kegiatan_model');
        $this->load->model('Fasilitas_model');
    }

    //FUNCTION DASHBOARD ADMIN
    public function index()
    {
        $this->template_admin->views('admin/dash_admin');
    }

    //FUNCTION MENU SISWA
    public function siswa()
    {
        $data['siswa'] = $this->Siswa_model->getAll()->result();
        $this->template_admin->views('admin/siswa', $data);
    }

    public function detail_siswa()
    {
        $id = $this->uri->segment(3);
        $data['detail'] = $this->db->query("SELECT * from tb_siswa where id = '$id'")->result();
        $this->template_admin->views('admin/detail_siswa', $data);
    }

    public function edit_siswa($id)
    {
        $where = array('id' => $id);
        $data['editsiswa'] = $this->Siswa_model->edit_data($where, 'tb_siswa')->result();
        $this->template_admin->views('admin/edit_siswa', $data);
    }

    public function update_siswa()
    {
        $id = $this->input->post('id');
        $no_induk = $this->input->post('no_induk');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $kelompok = $this->input->post('kelompok');
        $ttl = $this->input->post('ttl');
        $jenkel = $this->input->post('jenkel');
        $agama = $this->input->post('agama');
        $nama_ayah = $this->input->post('nama_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $anak_ke = $this->input->post('anak_ke');
        $hobi = $this->input->post('hobi');
        $hubungan_keluarga = $this->input->post('hubungan_keluarga');
        $pend_terakhir_ayah = $this->input->post('pend_terakhir_ayah');
        $pend_terakhir_ibu = $this->input->post('pend_terakhir_ibu');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $tapel = $this->input->post('tapel');
        //upload gambar
        $foto = $_FILES['foto'];
        if ($foto = '') {
            echo "Gambar harus di isi!";
        } else {

            $config['upload_path'] = './uploads/foto_siswa';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //1MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'no_induk' => $no_induk,
                    'nama_lengkap' => $nama_lengkap,
                    'kelompok' => $kelompok,
                    'ttl' => $ttl,
                    'jenkel' => $jenkel,
                    'agama' => $agama,
                    'nama_ayah' => $nama_ayah,
                    'pekerjaan_ayah' => $pekerjaan_ayah,
                    'nama_ibu' => $nama_ibu,
                    'pekerjaan_ibu' => $pekerjaan_ibu,
                    'anak_ke' => $anak_ke,
                    'hobi' => $hobi,
                    'hubungan_keluarga' => $hubungan_keluarga,
                    'pend_terakhir_ayah' => $pend_terakhir_ayah,
                    'pend_terakhir_ibu' => $pend_terakhir_ibu,
                    'alamat' => $alamat,
                    'email' => $email,
                    'telp' => $telp,
                    'tapel' => $tapel
                );

                $where = array(
                    'id' => $id
                );

                $this->Siswa_model->update_data($where, $data, 'tb_siswa');
                redirect('Admin/siswa');
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'no_induk' => $no_induk,
            'nama_lengkap' => $nama_lengkap,
            'kelompok' => $kelompok,
            'ttl' => $ttl,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'nama_ayah' => $nama_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'anak_ke' => $anak_ke,
            'hobi' => $hobi,
            'hubungan_keluarga' => $hubungan_keluarga,
            'pend_terakhir_ayah' => $pend_terakhir_ayah,
            'pend_terakhir_ibu' => $pend_terakhir_ibu,
            'alamat' => $alamat,
            'email' => $email,
            'telp' => $telp,
            'tapel' => $tapel,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->Siswa_model->update_data($where, $data, 'tb_siswa');
        redirect('admin/siswa');
    }

    public function hapus_siswa($id)
    {
        $where = array('id' => $id);
        $this->Siswa_model->hapus_data($where, 'tb_siswa');
        redirect('admin/siswa');
    }


    public function report_siswa()
    {
        $data['siswa'] = $this->Siswa_model->getAll()->result();
        $this->load->view('admin/report_siswa', $data);
    }

    //FUNCTION MENU DATA GURU
    public function tambah_guru()
    {
        $this->template_admin->views('admin/input_guru');
    }

    public function input_guru()
    {
        $nip = $this->input->post('nip');
        $nama_guru = $this->input->post('nama_guru');
        $gr_kelompok = $this->input->post('gr_kelompok');
        $ttl = $this->input->post('ttl');
        $jenkel = $this->input->post('jenkel');
        $pend_terakhir = $this->input->post('pend_terakhir');
        $agama = $this->input->post('agama');
        $th_ijazah_terakhir = $this->input->post('th_ijazah_terakhir');
        $alamat = $this->input->post('alamat');
        $status = $this->input->post('status');
        $jabatan = $this->input->post('jabatan');
        $telp = $this->input->post('telp');
        $no_sertifikasi = $this->input->post('no_sertifikasi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {

            $config['upload_path'] = './uploads/foto_guru';
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
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'gr_kelompok' => $gr_kelompok,
            'ttl' => $ttl,
            'jenkel' => $jenkel,
            'pend_terakhir' => $pend_terakhir,
            'agama' => $agama,
            'th_ijazah_terakhir' => $th_ijazah_terakhir,
            'alamat' => $alamat,
            'status' => $status,
            'jabatan' => $jabatan,
            'telp' => $telp,
            'no_sertifikasi' => $no_sertifikasi,
            'foto' => $foto
        );
        $this->Pegawai_model->input_data($data, 'tb_pegawai');
        redirect('Admin/data_guru');
    }

    public function data_guru()
    {
        $data['guru'] = $this->Pegawai_model->getAll()->result();
        // $nip = $this->uri->segment(3);
        // $data['guru'] = $this->db->query("SELECT * from tb_pegawai")->result();
        $this->template_admin->views('admin/data_guru', $data);
    }

    public function detail_guru()
    {
        $id = $this->uri->segment(3);
        $data['detailguru'] = $this->db->query("SELECT * from tb_pegawai where id = '$id'")->result();
        $this->template_admin->views('admin/detail_guru', $data);
    }

    public function edit_guru($id)
    {
        $where = array('id' => $id);
        $data['editguru'] = $this->Pegawai_model->edit_data($where, 'tb_pegawai')->result();
        $this->template_admin->views('admin/edit_guru', $data);
    }

    public function update_guru()
    {
        $id = $this->input->post('id');
        $nip = $this->input->post('nip');
        $nama_guru = $_POST['nama_guru'];
        $gr_kelompok = $_POST['gr_kelompok'];
        $ttl = $_POST['ttl'];
        $jenkel = $_POST['jenkel'];
        $pend_terakhir = $_POST['pend_terakhir'];
        $agama = $_POST['agama'];
        $th_ijazah_terakhir = $_POST['th_ijazah_terakhir'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $jabatan = $_POST['jabatan'];
        $telp = $_POST['telp'];
        $no_sertifikasi = $_POST['no_sertifikasi'];
        //upload gambar
        $foto = $_FILES['foto'];
        if ($foto = '') {
            echo "Gambar harus di isi!";
        } else {

            $config['upload_path'] = './uploads/foto_guru';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'nip' => $nip,
                    'nama_guru' => $nama_guru,
                    'gr_kelompok' => $gr_kelompok,
                    'ttl' => $ttl,
                    'jenkel' => $jenkel,
                    'pend_terakhir' => $pend_terakhir,
                    'agama' => $agama,
                    'th_ijazah_terakhir' => $th_ijazah_terakhir,
                    'alamat' => $alamat,
                    'status' => $status,
                    'jabatan' => $jabatan,
                    'telp' => $telp,
                    'no_sertifikasi' => $no_sertifikasi
                );

                $where = array(
                    'id' => $id
                );

                $this->Pegawai_model->update_data($where, $data, 'tb_pegawai');
                redirect('Admin/data_guru');
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'gr_kelompok' => $gr_kelompok,
            'ttl' => $ttl,
            'jenkel' => $jenkel,
            'pend_terakhir' => $pend_terakhir,
            'agama' => $agama,
            'th_ijazah_terakhir' => $th_ijazah_terakhir,
            'alamat' => $alamat,
            'status' => $status,
            'jabatan' => $jabatan,
            'telp' => $telp,
            'no_sertifikasi' => $no_sertifikasi,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->Pegawai_model->update_data($where, $data, 'tb_pegawai');
        redirect('Admin/data_guru');
    }

    public function hapus_guru($id)
    {
        $where = array('id' => $id);
        $this->Pegawai_model->hapus_data($where, 'tb_pegawai');
        redirect('admin/data_guru');
    }

    public function report_guru()
    {
        $data['guru'] = $this->Pegawai_model->getAll()->result();
        $this->load->view('admin/report_guru', $data);
    }

    //FUNCTION MENU AKUN GURU
    public function akun_guru()
    {
        $id = $this->uri->segment(3);
        $data['akunguru'] = $this->db->query("SELECT * from tb_user where level = 'Guru'")->result();
        $this->template_admin->views('admin/akun_guru', $data);
    }

    public function tambah_akunguru()
    {
        $this->template_admin->views('admin/input_akunguru');
    }

    public function input_akunguru()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'level' => $level
        );
        $this->User_model->input_data($data, 'tb_user');
        redirect('admin/akun_guru');
    }

    public function detail_akunguru()
    {
        $id = $this->uri->segment(3);
        $data['detailakunguru'] = $this->db->query("SELECT * from tb_user where id = '$id'")->result();
        $this->template_admin->views('admin/detail_akunguru', $data);
    }

    public function hapus_akunguru($id)
    {
        $where = array('id' => $id);
        $this->Pegawai_model->hapus_data($where, 'tb_user');
        redirect('Admin/akun_guru');
    }

    //FUNCTIN MENU RINCIAN BAYAR
    public function tambah_rincianbayar()
    {
        $this->template_admin->views('admin/input_rincianbayar');
    }

    public function input_rincianbayar()
    {
        $no_rekening = $this->input->post('no_rekening');
        $biaya_daftar = $this->input->post('biaya_daftar');
        $biaya_seragam = $this->input->post('biaya_seragam');
        $biaya_buku = $this->input->post('biaya_buku');
        $file_biaya = $_FILES['file_biaya'];
        if ($file_biaya = '') {
        } else {

            $config['upload_path'] = './uploads/rincian_bayar';
            $config['allowed_types'] = 'pdf|docx|doc';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file_biaya')) {
                echo "Upload Gagal";
                die();
            } else {
                $file_biaya = $this->upload->data("file_name");
            }
        }

        $data = array(
            'no_rekening' => $no_rekening,
            'biaya_daftar' => $biaya_daftar,
            'biaya_seragam' => $biaya_seragam,
            'biaya_buku' => $biaya_buku,
            'file_biaya' => $file_biaya
        );
        $this->Rincianbayar_model->input_data($data, 'tb_rincianbayar');
        redirect('admin/data_rincianbayar');
    }

    public function data_rincianbayar()
    {
        $data['rincianbayar'] = $this->Rincianbayar_model->getAll()->result();
        $this->template_admin->views('admin/data_rincianbayar', $data);
    }

    public function edit_rincianbayar($id)
    {
        $where = array('id' => $id);
        $data['editrincianbayar'] = $this->Rincianbayar_model->edit_data($where, 'tb_rincianbayar')->result();
        $this->template_admin->views('admin/edit_rincianbayar', $data);
    }

    public function update_rincianbayar()
    {
        $id = $this->input->post('id');
        $no_rekening = $this->input->post('no_rekening');
        $biaya_daftar = $this->input->post('biaya_daftar');
        $biaya_seragam = $this->input->post('biaya_seragam');
        $biaya_buku = $this->input->post('biaya_buku');
        //Update file biaya
        $file_biaya = $_FILES['file_biaya'];
        if ($file_biaya = '') {
        } else {
            $config['upload_path'] = './uploads/rincian_bayar';
            $config['allowed_types'] = 'pdf|docx|doc|xls';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file_biaya')) {
                $data = array(
                    'no_rekening' => $no_rekening,
                    'biaya_daftar' => $biaya_daftar,
                    'biaya_seragam' => $biaya_seragam,
                    'biaya_buku' => $biaya_buku
                );

                $where = array(
                    'id' => $id
                );

                $this->Rincianbayar_model->update_data($where, $data, 'tb_rincianbayar');
                redirect('admin/data_rincianbayar');
            } else {
                $file_biaya = $this->upload->data("file_name");
            }
        }

        $data = array(
            'no_rekening' => $no_rekening,
            'biaya_daftar' => $biaya_daftar,
            'biaya_seragam' => $biaya_seragam,
            'biaya_buku' => $biaya_buku,
            'file_biaya' => $file_biaya
        );

        $where = array(
            'id' => $id
        );

        $this->Rincianbayar_model->update_data($where, $data, 'tb_rincianbayar');
        redirect('admin/data_rincianbayar');
    }

    public function hapus_rincianbayar($id)
    {
        $where = array('id' => $id);
        $this->Rincianbayar_model->hapus_data($where, 'tb_rincianbayar');
        redirect('Admin/data_rincianbayar');
    }

    //FUNCTION MENU DATA PEMBAYARAN SISWA
    public function data_pembayaran()
    {
        $data['datapembayaran'] = $this->Pembayaran_model->getAll()->result();
        // $id = $this->uri->segment(3);
        // $data['pembayaran'] = $this->db->query("SELECT * from tb_pembayaran")->result();
        $this->template_admin->views('admin/data_pembayaran', $data);
    }

    public function detail_pembayaran()
    {
        $id = $this->uri->segment(3);
        $data['detailpembayaran'] = $this->db->query("SELECT * from tb_pembayaran where id = '$id'")->result();
        $this->template_admin->views('admin/detail_pembayaran', $data);
    }

    public function edit_pembayaran($id)
    {
        $where = array('id' => $id);
        $data['editpembayaran'] = $this->Pembayaran_model->edit_data($where, 'tb_pembayaran')->result();
        $this->template_admin->views('admin/edit_pembayaran', $data);
    }

    public function update_pembayaran()
    {
        $id = $this->input->post('id');
        $nasabah = $this->input->post('nasabah');
        $tgl_pembayaran = $this->input->post('tgl_pembayaran');
        $nama_siswa = $this->input->post('nama_siswa');
        $kelompok = $this->input->post('kelompok');
        $status = $this->input->post('status');

        $data = array(
            'nasabah' => $nasabah,
            'tgl_pembayaran' => $tgl_pembayaran,
            'nama_siswa' => $nama_siswa,
            'kelompok' => $kelompok,
            'status' => $status
        );

        $where = array(
            'id' => $id
        );

        $this->Pembayaran_model->update_data($where, $data, 'tb_pembayaran');
        redirect('admin/data_pembayaran');
    }

    public function hapus_pembayaran($id)
    {
        $where = array('id' => $id);
        $this->Pembayaran_model->hapus_data($where, 'tb_pembayaran');
        redirect('Admin/data_pembayaran');
    }

    public function report_pembayaran()
    {
        // $this->load->library('mypdf');
        $data['pembayaran'] = $this->Pembayaran_model->getAll()->result();
        // $this->mypdf->generate('admin/report_pembayaran', $data);
        $this->load->view('admin/report_pembayaran', $data);
    }

    //FUNCTION MENU KEGIATAN
    public function kegiatan_tk()
    {
        $data['kegiatan'] = $this->Kegiatan_model->getAll()->result();
        $this->template_admin->views('admin/kegiatan_tk', $data);
    }

    public function tambah_kegiatan()
    {
        $this->template_admin->views('admin/input_kegiatan');
    }

    public function input_kegiatan()
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {

            $config['upload_path'] = './uploads/foto_kegiatan';
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
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'foto' => $foto,
            'deskripsi' => $deskripsi
        );
        $this->Kegiatan_model->input_data($data, 'tb_kegiatan');
        redirect('admin/kegiatan_tk');
    }

    public function edit_kegiatan($id)
    {
        $where = array('id' => $id);
        $data['editkegiatan'] = $this->Kegiatan_model->edit_data($where, 'tb_kegiatan')->result();
        $this->template_admin->views('admin/edit_kegiatan', $data);
    }

    public function update_kegiatan()
    {
        $id = $this->input->post('id');
        $deskripsi = $_POST['deskripsi'];
        //upload gambar
        $foto = $_FILES['foto'];
        if ($foto = '') {
            echo "Gambar harus di isi!";
        } else {
            $config['upload_path'] = './uploads/foto_kegiatan';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'deskripsi' => $deskripsi
                );

                $where = array(
                    'id' => $id
                );

                $this->Kegiatan_model->update_data($where, $data, 'tb_kegiatan');
                redirect('Admin/kegiatan_tk');
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'deskripsi' => $deskripsi,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->Kegiatan_model->update_data($where, $data, 'tb_kegiatan');
        redirect('Admin/kegiatan_tk');
    }

    //FUNCTION MENU FASILITAS
    public function fasilitas_tk()
    {
        $data['fasilitas'] = $this->Fasilitas_model->getAll()->result();
        $this->template_admin->views('admin/fasilitas_tk', $data);
    }

    public function tambah_fasilitas()
    {
        $this->template_admin->views('admin/input_fasilitas');
    }

    public function input_fasilitas()
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {

            $config['upload_path'] = './uploads/foto_fasilitas';
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
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'foto' => $foto,
            'deskripsi' => $deskripsi
        );
        $this->Fasilitas_model->input_data($data, 'tb_fasilitas');
        redirect('admin/fasilitas_tk');
    }

    public function edit_fasilitas($id)
    {
        $where = array('id' => $id);
        $data['editfasilitas'] = $this->Kegiatan_model->edit_data($where, 'tb_fasilitas')->result();
        $this->template_admin->views('admin/edit_fasilitas', $data);
    }

    public function update_fasilitas()
    {
        $id = $this->input->post('id');
        $deskripsi = $_POST['deskripsi'];
        //upload gambar
        $foto = $_FILES['foto'];
        if ($foto = '') {
            echo "Gambar harus di isi!";
        } else {
            $config['upload_path'] = './uploads/foto_fasilitas';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'deskripsi' => $deskripsi
                );

                $where = array(
                    'id' => $id
                );

                $this->Fasilitas_model->update_data($where, $data, 'tb_fasilitas');
                redirect('admin/fasilitas_tk');
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'deskripsi' => $deskripsi,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->Fasilitas_model->update_data($where, $data, 'tb_fasilitas');
        redirect('admin/fasilitas_tk');
    }

    public function hapus_fasilitas($id)
    {
        $where = array('id' => $id);
        $this->Fasilitas_model->hapus_data($where, 'tb_fasilitas');
        redirect('admin/fasilitas_tk');
    }
}
