<?php

class CheckListModel extends CI_Model
{
    public function getConstructionList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=1;");
        return $query->result();
    }
    public function getCollectionList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=2;");
        return $query->result();
    }
    public function getTreatmentList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=3;");
        return $query->result();
    }
}
 ?>
