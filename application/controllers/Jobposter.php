<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobposter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Home_model');
		$this->load->model('Login_model');
	}
	public function index()
	{
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('prov_header',$result);
		$this->load->view('index3');
        $result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Prov_aboutus(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('prov_header',$result);
		$this->load->view('prov_aboutus');
        $result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Prov_joblist(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
		$result['jobDetails']=$this->Login_model->fetchJobDetails($id);
        $this->load->view('prov_header',$result);
		$this->load->view('prov_job_list',$result);
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Prov_contact(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('prov_header',$result);
		$this->load->view('prov_contact');
        $result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}

	}
	public function Prov_postjob(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('prov_header',$result);
		$result['jobCategories']=$this->Home_model->fetchJobCategories();
		$result['cityCategories']=$this->Home_model->fetchCityCategories();
		$this->load->view('prov_post_job',$result);
        $result['topCategories']=$this->Home_model->fetchTopCategories();
        $this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Prov_editjob(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$jobid=$this->input->get('jobid');
		$this->load->helper('url');
        $this->load->view('head');
		$result['singleJobDetails']=$this->Login_model->fetchSingleJobDetail($jobid,$id);
		
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('prov_header',$result);
		$result['jobCategories']=$this->Home_model->fetchJobCategories();
		$result['cityCategories']=$this->Home_model->fetchCityCategories();
		$this->load->view('prov_edit_job',$result);
        $result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	
	
	
	public function addJob(){
		if($this->session->userdata('loggedIn')){
        if($this->input->post('cosubmit')){
			$config['upload_path']='./upload/comp_job_images';
			$config['allowed_types']='jpg|png|jpeg';
			$config['max_size']=10240;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image')){
			  $error = array('error' => $this->upload->display_errors());
			  //print_r($error);
			  echo $error['error'];
			  die();
		  
			 }else{
				$upload_data = $this->upload->data();
				$jobdata =   $upload_data['file_name'];
			}
			$data=array(
				'user_id'=>$this->input->post('uid'),
				'cat_id'=>$this->input->post('category'),
				'city_id'=>$this->input->post('location'),
				'job_name'=>$this->input->post('jobname'),
				'job_designation'=>$this->input->post('designation'),
				'job_desc'=>$this->input->post('description'),
				'job_salary'=>$this->input->post('msalary'),
				'job_company_name'=>$this->input->post('companyname'),
				'job_company_website'=>$this->input->post('website'),
				'job_phone_number'=>$this->input->post('phone'),
				'job_mail'=>$this->input->post('email'),
				'job_vacancy'=>$this->input->post('vacancy'),
				'job_address'=>$this->input->post('address'),
				'job_qualification'=>$this->input->post('qualification'),
				'job_skill'=>$this->input->post('skill'),
				'job_image'=>$jobdata,
				'job_date'=>$this->input->post('date'),
				'job_type'=>$this->input->post('jobtype'),
				'job_experince'=>$this->input->post('experience'),
				'job_work_day'=>$this->input->post('wday'),
				'job_work_time'=>$this->input->post('wtime'),
				'status'=>$this->input->post('ustat'),
			);
			$response=$this->Login_model->postJob($data);
			if($response==true){
				echo "<script>";
				echo "alert('Your Job added Successfully');";
				echo "window.location.href = '" . base_url() . "Jobposter';";
				echo "</script>";
			  }
			  else{
				  echo "<script>alert('Something gone wrong')</script>";
			  }

		}
	}else{
		redirect(base_url('Login'));
	}
	}
	public function editJob(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		if($this->input->post('jobup')){
			$job_id=$this->input->post('jobid');
			$cat_id=$this->input->post('category');
			$city_id=$this->input->post('location');
			$job_name=$this->input->post('jobname');
			$job_designation=$this->input->post('designation');
			$job_desc=$this->input->post('description');
			$job_salary=$this->input->post('msalary');
			$job_company_name=$this->input->post('companyname');
			$job_company_website=$this->input->post('website');
			$job_phone_number=$this->input->post('phone');
			$job_mail=$this->input->post('email');
			$job_vacancy=$this->input->post('vacancy');
			$job_address=$this->input->post('address');
			$job_qualification=$this->input->post('qualification');
			$job_skill=$this->input->post('skill');
			$job_type=$this->input->post('jobtype');
			$job_experience=$this->input->post('experience');
			$job_work_day=$this->input->post('wday');
			$job_work_time=$this->input->post('wtime');
			$response=$this->Login_model->editJobDetails($id,$job_id,$cat_id,$city_id,$job_name,$job_designation,$job_desc,$job_salary,$job_company_name,$job_company_website,$job_phone_number,$job_mail,$job_vacancy,$job_address,$job_qualification,$job_skill,$job_type,$job_experience,$job_work_day,$job_work_time);
			if($response==true){
				echo "<script>";
				echo "alert('Your Job Updated Successfully');";
				echo "window.location.href = '" . base_url() . "Jobposter/Prov_joblist';";
				echo "</script>";
			  }
			  else{
				  echo "<script>alert('Something gone wrong')</script>";
			  }



		}
	}else{
		redirect(base_url('Login'));
	}
	}
	public function editJobImage(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$jobid=$this->input->post('id');
        $config['upload_path']='./upload/comp_job_images';
        $config['allowed_types']='gif|jpg|png|jpeg|webp';
        $config['max_size']=10240;
		/*
        $config['max_width']=1024;
        $config['max_height']=768;*/
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
			echo "<script>alert('Upload a image')</script>";
        }
        else{
            $upload_data = $this->upload->data();
			$filedata =   $upload_data['file_name'];
            $this->Login_model->updateJobImage($id,$jobid,$filedata);
			echo "<script>";
			echo "alert('Job Image Updated Successfully');";
            echo "window.location.href = '" . base_url() . "Jobposter/Prov_editjob?jobid=$jobid';";
			echo "</script>";
        }
	}else{
		redirect(base_url('Login'));
	}
    }
	public function Prov_deleteJob(){
		if($this->session->userdata('loggedIn')){
		$jobid=$this->input->get('jobid');
		//echo $jobid;
		$id=$this->session->userdata('loggedIn')['id'];
		$response=$this->Login_model->deleteJobDetails($id,$jobid);
		if(response==true){
			echo "<script>";
			echo "alert('Your Job Deleted Successfully');";
            echo "window.location.href = '" . base_url() . "Jobposter/Prov_joblist';";
			echo "</script>";
		}
	}else{
		redirect(base_url('Login'));
	}
	}
	
	public function appliedEmployee(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
	    $this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
		$result['appliedEmployeeDetails']=$this->Login_model->fetchAppliedEmployeeDetails($id);
        $this->load->view('prov_header',$result);
		$this->load->view('appliedemployee',$result);
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Prov_editprofile(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->helper('url');
        $this->load->view('head');
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('prov_header',$result);
		$this->load->view('prov_editprofile',$result);
        $result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobposter_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}

	public function uploadJobPosterProfileImage(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
        //print_r($_FILES);
        $config['upload_path']='./upload/profile_images';
        $config['allowed_types']='gif|jpg|png|jpeg|webp';
        $config['max_size']=10240;
		/*
        $config['max_width']=1024;
        $config['max_height']=768;*/
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            //print_r($error);
			echo "<script>alert('Upload a image')</script>";
            die();
            // $this->load->view('uploadview', $error);
        }
        else{
            $upload_data = $this->upload->data();
			$filedata =   $upload_data['file_name'];
            $this->Login_model->updateUserImage($id,$filedata);
			echo "<script>";
			echo "alert('Display Profile Updated Successfully');";
            echo "window.location.href = '" . base_url() . "Jobposter/Prov_editprofile';";
			echo "</script>";
        }
	}else{
		redirect(base_url('Login'));
	}
    }
	public function editJobPosterProfileDetails(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		if($this->input->post('update')){
			$name=$this->input->post('pname');
			$dob=$this->input->post('pdob');
			$gender=$this->input->post('pgender');
			$email=$this->input->post('pemail');
			$phone=$this->input->post('pphone');
			$city=$this->input->post('pcity');
			$address=$this->input->post('paddress');
			$response=$this->Login_model->updateJobPoster($id,$name,$dob,$gender,$email,$phone,$city,$address);
			if($response==true){
				echo "<script>";
				echo "alert('Your Profile Updated Successfully');";
				echo "window.location.href = '" . base_url() . "Jobposter';";
				echo "</script>";
			  }
			  else{
				  echo "<script>alert('Something gone wrong')</script>";
			  }

		}
	}else{
		redirect(base_url('Login'));
	}
	}
	public function Hire(){
		if($this->session->userdata('loggedIn')){
		$jobid=$this->input->post('jbid');
		$userid=$this->input->post('usid');
		$response=$this->Login_model->hireJobSeeker($jobid,$userid);
		echo $response;
		if($response==true){
			echo "<script>";
			echo "alert('Your Have Successfully Saved this user');";
			echo "window.location.href = '" . base_url() . "Jobposter';";
			echo "</script>";
		}
	}else{
		redirect(base_url('Login'));
	}
}
	
}