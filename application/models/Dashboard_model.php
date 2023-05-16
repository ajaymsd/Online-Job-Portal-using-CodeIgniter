<?php 
class Dashboard_model extends CI_Model{
    public function getUserDetails($id){
        $query=$this->db->where('id',$id)->get('tbl_users');
        return $query->result();
    }
    public function getTotalSavedJobs($id){
        $query = $this->db->query("SELECT * FROM tbl_saved where user_id='" . $id . "'");
        return $query->num_rows();
    }
    public function getTotalAppliedJobs($id){
        $query = $this->db->query("SELECT * FROM tbl_apply where user_id='" . $id . "'");
        return $query->num_rows();
    }
}
?>