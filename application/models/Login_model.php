<?php 
class Login_model extends CI_Model{
    public function getUser($email,$password){
      // echo $email;
      // echo $password;
        //$query=$this->db->where('email',$email)->where('password',$password)->get('tbl_users');
       $this->db->select('*');
       $this->db->from('tbl_users');
       $this->db->where('email',$email);
       $this->db->where('password',$password);
       $query = $this->db->get();
       return $query->result();  
    }
    public function fetchUserDetails($id){
        $query=$this->db->where('id',$id)->get('tbl_users');
        return $query->result();
    }
    public function updateUser($id,$uname,$dob,$gender,$email,$phone,$city,$address,$experience,$company,$skills,$resumedata){
        $data = array(
            'name' => $uname,
            'email' => $email,
            'phone'=>$phone,
            'city'=>$city,
            'address'=>$address,
            'user_resume'=>$resumedata,
            'current_company_name'=>$company,
            'experiences'=>$experience,
            'skills'=>$skills,
            'gender'=>$gender,
            'date_of_birth'=>$dob
            );
            $this->db->set($data);
            $this->db->where('id',$id);
            $this->db->update('tbl_users');
            return true;
    }
    public function updateJobPoster($id,$name,$dob,$gender,$email,$phone,$city,$address){
      $data = array(
          'name' => $name,
          'email' => $email,
          'phone'=>$phone,
          'city'=>$city,
          'address'=>$address,
          'gender'=>$gender,
          'date_of_birth'=>$dob
          );
          $this->db->set($data);
          $this->db->where('id',$id);
          $this->db->update('tbl_users');
          return true;
  }
    public function updateUserImage($id,$filedata){
          $data=array(
            'user_image'=>$filedata
          );
            $this->db->set($data);
            $this->db->where('id',$id);
            $this->db->update('tbl_users');
            return true;
    }
    public function updateJobImage($id,$jobid,$filedata){
      $data=array(
        'job_image'=>$filedata
      );
        $this->db->set($data);
        $this->db->where('user_id',$id);
        $this->db->where('id',$jobid);
        $this->db->update('tbl_jobs');
        return true;
}
    public function updateUserResume($id,$filedata){
        $data=array(
          'user_image'=>$filedata
        );
          $this->db->set($data);
          $this->db->where('id',$id);
          $this->db->update('tbl_users');
          return true;
  }
  
   public function fetchSavedJobs($id){
      $this->db->select('tbl_jobs.*,tbl_saved.user_id,tbl_saved.job_id');
      $this->db->from('tbl_jobs');
      $this->db->join('tbl_saved','tbl_saved.job_id=tbl_jobs.id','left');
      $this->db->where('tbl_saved.user_id',$id);
      $query=$this->db->get();
      return $query->result();
   }
   public function fetchAppliedJobs($id){
    $this->db->select('tbl_jobs.*,tbl_apply.*');
    $this->db->from('tbl_jobs');
    $this->db->join('tbl_apply','tbl_apply.job_id=tbl_jobs.id','left');
    $this->db->where('tbl_apply.user_id',$id);
    $query=$this->db->get();
    return $query->result();
 }
 public function postJob($data){
  $this->db->insert('tbl_jobs',$data);
  return true;
 }
 public function fetchJobDetails($id){
  $this->db->select('tbl_jobs.*,
  tbl_city.city_name,
  tbl_category.category_name');
  $this->db->from('tbl_jobs');
  $this->db->join('tbl_category','tbl_category.cid=tbl_jobs.cat_id','left');
  $this->db->join('tbl_city','tbl_city.c_id=tbl_jobs.city_id','left');
  $this->db->where('tbl_jobs.user_id',$id);
  $query=$this->db->get();
  return $query->result();
}
public function fetchSingleJobDetail($jobid,$id){
  $this->db->select('tbl_jobs.*,
  tbl_city.city_name,
  tbl_category.category_name');
  $this->db->from('tbl_jobs');
  $this->db->join('tbl_category','tbl_category.cid=tbl_jobs.cat_id','left');
  $this->db->join('tbl_city','tbl_city.c_id=tbl_jobs.city_id','left');
  $this->db->where('tbl_jobs.id',$jobid);
  $this->db->where('tbl_jobs.user_id',$id);
  $query=$this->db->get();
  return $query->result();
}
public function editJobDetails($id,$job_id,$cat_id,$city_id,$job_name,$job_designation,$job_desc,$job_salary,$job_company_name,$job_company_website,$job_phone_number,$job_mail,$job_vacancy,$job_address,$job_qualification,$job_skill,$job_type,$job_experience,$job_work_day,$job_work_time){
  $data=array(
				'cat_id'=>$cat_id,
				'city_id'=>$city_id,
				'job_name'=>$job_name,
				'job_designation'=>$job_designation,
				'job_desc'=>$job_desc,
				'job_salary'=>$job_salary,
				'job_company_name'=>$job_company_name,
				'job_company_website'=>$job_company_website,
				'job_phone_number'=>$job_phone_number,
				'job_mail'=>$job_mail,
				'job_vacancy'=>$job_vacancy,
				'job_address'=>$job_address,
				'job_qualification'=>$job_qualification,
				'job_skill'=>$job_skill,
				'job_type'=>$job_type,
				'job_experince'=>$job_experience,
				'job_work_day'=>$job_work_day,
				'job_work_time'=>$job_work_time
  );
          $this->db->set($data);
          $this->db->where('id',$job_id);
          $this->db->where('user_id',$id);
          $this->db->update('tbl_jobs');
          return true;
}
    public function deleteJobDetails($id,$jobid){
      $this->db->delete('tbl_jobs', array('id' => $jobid,'user_id'=>$id));
      return true;
    }
    public function fetchAppliedEmployeeDetails($id){
      $this->db->select('tbl_jobs.*,
      tbl_apply.*,
      tbl_users.*');
      $this->db->from('tbl_jobs');
      $this->db->join('tbl_apply','tbl_apply.job_id=tbl_jobs.id','left');
      $this->db->join('tbl_users','tbl_users.id=tbl_apply.user_id','left');
      $this->db->where('tbl_jobs.user_id',$id);
      $query=$this->db->get();
      return $query->result();
    }
    public function hireJobSeeker($jobid,$userid){
      $this->db->set('seen',1);
      $this->db->where('job_id',$jobid);
      $this->db->where('user_id',$userid);
      $this->db->update('tbl_apply');
      return true;
    }
}
?>