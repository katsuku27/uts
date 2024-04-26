<?php

class Kunjungan_model extends CI_Model {

    public function show_all()
    {
            $query = $this->db->get('kunjungan', 10);
            return $query->result();
    }

    public function get_joined_data() {
        $this->db->select('k.id_kunjungan, k.keluhan, k.tanggal_kunjungan, p.nama AS nama, d.nama_dokter AS nama_dokter, poli.nama_poli AS nama_poli');
        $this->db->from('kunjungan k');
        $this->db->join('pasien p', 'k.id_pasien = p.id_pasien');
        $this->db->join('dokter d', 'k.id_dokter = d.id_dokter');
        $this->db->join('poli', 'k.id_poli = poli.id_poli');
        $query = $this->db->get();
        return $query->result();
    }

    public function create($data)
    {
        $this->db->insert('kunjungan', $data);
    }

    public function get_by_id($id_kunjungan) {
        $this->db->where('id_kunjungan', $id_kunjungan);
        return $this->db->get('kunjungan')->row();
    }

    public function update($id_kunjungan, $data)
    {
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->update('kunjungan', $data);
    }

    public function delete($id_kunjungan)
    {
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->delete('kunjungan');
    }

}

?>