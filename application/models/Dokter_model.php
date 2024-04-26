<?php

class Dokter_model extends CI_Model {

    public function show_all()
    {
            $query = $this->db->get('dokter', 10);
            return $query->result();
    }

    public function create($data)
    {
        $this->db->insert('dokter', $data);
    }

    public function update($data, $id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        $this->db->update('dokter', $data);
    } 

}

?> 