<?php
   class Home2_model extends CI_Model{
    public function checkApply($apjbid,$apusid,$apcreated,$apseen){
        $query=$this->db->where('user_id',$apusid)->where('job_id',$apjbid)->get('tbl_apply');
        return $query->result();
    }
    public function applyJob($jobArray){
        $this->db->insert('tbl_apply',$jobArray);
        return true;
    }
    public function checkFavouraite($user_id,$job_id,$created){
        $query=$this->db->where('user_id',$user_id)->where('job_id',$job_id)->get('tbl_saved');
        return $query->result();
    }
    public function deleteFavouraite($user_id,$job_id,$created){
        $query=$this->db->delete('tbl_saved', array('user_id' => $user_id,'job_id'=>$job_id)); 
        return true;
    }
    public function addFavouraite($favouraiteArray){
        $this->db->insert('tbl_saved',$favouraiteArray);
        return true;
    }

   }
?>