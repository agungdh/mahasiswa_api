<?php
class M_welcome extends CI_Model{	 
    public function __construct()
    {
        parent::__construct();
    }

    function ambil() {
        return $this->db->get('mahasiswa')->result();
    }

    function tambah($data) {
        $this->db->insert('mahasiswa', $data);
        return $this->db->insert_id();
    }

    function ambil_where($where) {
        return $this->db->get_where('mahasiswa', $where)->row();
    }

    function ubah($data, $where) {
        $this->db->update('mahasiswa', $data, $where);
    }

    function hapus($where) {
        $this->db->delete('mahasiswa', $where);
    }
 
}