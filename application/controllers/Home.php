<?php

use Dompdf\FrameDecorator\Page;

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->model('Fasilitas_model');
    }

    public function index()
    {
        $this->load->view('home/_template/home');
    }

    public function profil()
    {
        $this->load->view('home/_template/profil');
    }

    public function kegiatan()
    {
        $data['kegiatan'] = $this->Kegiatan_model->getAll()->result();
        $this->load->view('home/_template/kegiatan');
    }

    public function fasilitas()
    {
        $data['fasilitas'] = $this->Fasilitas_model->getAll()->result();
        $this->load->view('home/_template/fasilitas');
    }

    public function bantuan()
    {
        $this->load->view('home/_template/bantuan');
    }
}
