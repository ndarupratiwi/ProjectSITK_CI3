<?php

class Pegawai_model extends CI_Model
{
    public function getAll()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_pegawai');
        $query = $this->db->get();
        return $query;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // public function upload_image()
    // {
    //     $config['upload_path'] = './uploads/foto_guru';
    //     $config['allowed_types'] = 'jpeg|jpg|png|svg';
    //     $config['file_name'] = $this->nama_lengkap;
    //     $config['overwrite'] = true;
    //     $config['max_size'] = 1024; //1MB
    //     // $config['max_width'] = 1024;
    //     // $config['max_height'] = 768;

    //     $this->load->library('Pegawai_model', $config);

    //     if ($this->upload->do_upload('image')) {
    //         return $this->do_upload->data("file_name");
    //     }
    //     return "default.jpg";
    // }
}
