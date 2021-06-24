<?php

class Siswa_model extends CI_Model
{
    public function getAll()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_siswa');
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

    //
    function detail_siswa($where, $data)
    {
        return $this->db->get_where($data, $where);
    }
}
