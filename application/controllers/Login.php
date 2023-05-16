<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Home_model');
		$this->load->model('Login_model');
		$this->load->model('Dashboard_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('session');
        $this->load->helper('url');
        $this->load->view('head');
        //$this->load->view('noheader');
		$this->load->view('login');
        $this->load->view('login_footer');
	}
	public function loginuser(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
			 'errors' => validation_errors()
			 );
			redirect(base_url('Login'),'refresh');
	}
	else{
		$email = $this->input->post('email');
        $password = md5($this->input->post('password'));
		// echo $email;
		// echo $password;
		// die;
		$session=$this->Login_model->getUser($email,$password);
		// echo count($session);
		 
		if(count($session)>0){
			$sess_array=array('id'=>$session[0]->id,'user_type'=>$session[0]->user_type,'email'=>$session[0]->email,'name'=>$session[0]->name);
			$this->session->set_userdata('loggedIn',$sess_array);
             if($session[0]->user_type=="1"){
				redirect("Jobseeker");
			 }
			 else{
				redirect("Jobposter");
			 }
		}
		else{
			
			echo "<script>";
			echo "alert('Please Provide Your credentials Correctly');";
			echo "window.location.href = '" . base_url() . "Login';";
			echo "</script>";
		}
	}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
	public function editprofile(){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('header',$result);
		$this->load->view('editprofile',$result);
		$this->load->view('footer',$result);
	}
	public function editprofiledetails(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		if($this->input->post('update')){
			$config['upload_path']='./upload/users_resume';
			$config['allowed_types']='pdf|jpg|png';
			$config['max_size']=10240;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('resume')){
			  $error = array('error' => $this->upload->display_errors());
			  //print_r($error);
			  echo "<script>";
			  echo "alert('Upload a Resume');";
              echo "window.location.href = '" . base_url() . "Login/editprofile';";
			  echo "</script>";
			  die();
		  
			 }else{
				$upload_data = $this->upload->data();
				$resumedata =   $upload_data['file_name'];
			}

			$uname=$this->input->post('uname');
			$dob=$this->input->post('dob');
			$gender=$this->input->post('gender');
			$email=trim($this->input->post('uemail')," ");
			$phone=$this->input->post('uphone');
			$city=$this->input->post('city');
			$address=$this->input->post('address');
			$experience=$this->input->post('experiences');
			$company=$this->input->post('company');
			$skills=$this->input->post('skills');
			$response=$this->Login_model->updateUser($id,$uname,$dob,$gender,$email,$phone,$city,$address,$experience,$company,$skills,$resumedata);
			if($response==true){
			  echo "<script>";
			  echo "alert('Your Profile Updated Successfully');";
              echo "window.location.href = '" . base_url() . "Jobseeker';";
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
	

	public function uploadProfileImage(){
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
            echo "window.location.href = '" . base_url() . "Login/editprofile';";
			echo "</script>";
        }
	}else{
		redirect(base_url('Login'));
	}
    }


	public function dashboard(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
		$this->load->helper('url');
        $this->load->view('head');
        $this->load->view('header',$result);
		$this->load->Dashboard_model->getUserDetails($id);
		$h['totalSavedJobs']=$this->load->Dashboard_model->getTotalSavedJobs($id);
		$h['totalAppliedJobs']=$this->load->Dashboard_model->getTotalAppliedJobs($id);
		//print_r($result);
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('dashboard',$h,$result);
        $this->load->view('footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}

	public function dashframe(){
	if($this->session->userdata('loggedIn')){
	   $this->load->helper('url');
       $this->load->view('head');
       $this->load->view('dashframe');
	}else{
		redirect(base_url('Login'));
	}
	}

	public function displayProfile(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
		$this->load->helper('url');
        $this->load->view('head');
		$this->load->view('displayprofile',$result);
		}else{
			redirect(base_url('Login'));
		}
	}


	public function savedJobs(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->view('head');
		$result['savedJobs']=$this->Login_model->fetchSavedJobs($id);
		//print_r($result);
		$this->load->view('savedjobs',$result);
		}else{
			redirect(base_url('Login'));
		}
	}

	public function appliedJobs(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$this->load->view('head');
		$result['appliedJobs']=$this->Login_model->fetchAppliedJobs($id);
		// print_r($result);
		// die;
		$this->Login_model->fetchSavedJobs($id);
		$this->load->view('appliedjob.php',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
}



