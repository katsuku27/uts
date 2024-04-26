<?php

class Pasien_model extends CI_Model {

    public function show_all() 
    {
            $query = $this->db->get('pasien', 10);
            return $query->result();
    }

    public function create($data)
    {
        $this->db->insert('pasien', $data);
    }

    public function update($data, $id_pasien)
    {
        $this->db->where('id_pasien', $id_pasien);
        $this->db->update('pasien', $data);
    }

}

?>