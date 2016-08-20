<?php

class ConstructionModel extends CI_Model
{
    public function getData()
    {
        $query = $this->db->get('construction');
        return $query->result();
    }
}
 ?>
