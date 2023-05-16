<?php 
class Register_model extends CI_Model{
    public function add_user($data){
        $this->db->insert('tbl_users',$data);
        return true;
    }
}
?>