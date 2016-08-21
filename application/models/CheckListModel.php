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
    public function getConstructionActivitiesList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=4;");
        return $query->result();
    }
    public function getCollectionActivitiesList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=5;");
        return $query->result();
    }
    public function getTreatmentActivitiesList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=6;");
        return $query->result();
    }
    public function getOtherActivitiesList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=7;");
        return $query->result();
    }
    public function getAffordabilityList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=8;");
        return $query->result();
    }
    public function getPriorityActivitiesList()
    {
        $query = $this->db->query("SELECT * FROM check_list WHERE type_no=9;");
        return $query->result();
    }
}
 ?>
