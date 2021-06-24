<?php
class Template_siswa
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_siswa = null, $data = null)
    {
        if ($template_siswa != null) {
            $data['header'] = $this->_ci->load->view('siswa/_template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('siswa/_template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('siswa/_template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_siswa, $data, TRUE);
            $data['content'] = $this->_ci->load->view('siswa/_template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('siswa/_template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('siswa/_template/js', $data, true);

            echo $data['template_siswa'] = $this->_ci->load->view('siswa/_template/template_siswa', $data, true);
        }
    }
}
