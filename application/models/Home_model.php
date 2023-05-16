<?php 
class Home_model extends CI_Model{
    public function fetchJobCategories(){
        return $this->db->get('tbl_category')->result();
    }
    public function fetchCityCategories(){
        return $this->db->get('tbl_city')->result();
    }
    public function fetchTopCategories(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }
    public function fetchJobCheckCategories(){
        $this->db->select('*');
        $this->db->from('tbl_jobs');
        //$this->db->limit(5);
        $this->db->group_by('job_type');
        $this->db->order_by('job_desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function fetchBrowsedEmployees(){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_type','2');
        $this->db->limit(15);
        $query = $this->db->get();
        return $query->result();
    }
    public function fetchBrowsedCities(){
        return $this->db->get('tbl_city')->result();
    }
    public function fetchJobs(){
        $this->db->select('*');
        $this->db->from('tbl_jobs');
        $this->db->where('status','1');
        $query = $this->db->get();
        return $query->result();
    }
 }

?>