<?php
class Template_guru
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_guru = null, $data = null)
    {
        if ($template_guru != null) {
            $data['header'] = $this->_ci->load->view('guru/_template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('guru/_template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('guru/_template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_guru, $data, TRUE);
            $data['content'] = $this->_ci->load->view('guru/_template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('guru/_template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('guru/_template/js', $data, true);

            echo $data['template_guru'] = $this->_ci->load->view('guru/_template/template_guru', $data, true);
        }
    }
}
