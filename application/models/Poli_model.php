<?php

class Poli_model extends CI_Model {

    public function show_all()
    {
            $query = $this->db->get('poli', 10);
            return $query->result();
    }

    public function create($data)
    {
        $this->db->insert('poli', $data);
    }

    public function update($data, $id_poli)
    {
        $this->db->where('id_poli', $id_poli);
        $this->db->update('poli', $data);
    }

}

?>