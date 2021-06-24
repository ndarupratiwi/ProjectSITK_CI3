<?php

class Pembayaran_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $query = $this->db->get();
        return $query;
    }

    public function get_pembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->where('nasabah', '$nasabah');
        $this->db->where('nama_siswa', '$nama_siswa');
        $query = $this->db->get();
        return $query;
        // return $this->db->get_where($where);
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
}
