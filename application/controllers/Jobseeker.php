<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseeker extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Home_model');
		$this->load->model('Home2_model');
		$this->load->model('Login_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
		$result['jobCategories']=$this->Home_model->fetchJobCategories();
		$result['cityCategories']=$this->Home_model->fetchCityCategories();
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$result['browsedEmployees']=$this->Home_model->fetchBrowsedEmployees();
		$result['browsedCities']=$this->Home_model->fetchBrowsedCities();
		$result['jobs']=$this->Home_model->fetchJobs();
		$this->load->helper('url');
        $this->load->view('head');
        $this->load->view('header',$result);
		$this->load->view('index2',$result);
		$this->load->view('Jobseeker_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
		
	}
	public function Aboutus(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('head');
        $this->load->view('header',$result);
		$this->load->view('aboutus');
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$this->load->view('Jobseeker_footer',$result);
	}else{
		redirect(base_url('Login'));
	}
}

	public function Contact(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('head');
        $this->load->view('header',$result);
		$this->load->view('contact');
		$result['topCategories']=$this->Home_model->fetchTopCategories();
        $this->load->view('Jobseeker_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Job(){
		if($this->session->userdata('loggedIn')){
		$id=$this->session->userdata('loggedIn')['id'];
		$result['userDetails']=$this->Login_model->fetchUserDetails($id);
        $this->load->view('head');
        $this->load->view('header',$result);
		$result['jobs']=$this->Home_model->fetchJobs();
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$result['jobCategories']=$this->Home_model->fetchJobCheckCategories();
		$result['cityCategories']=$this->Home_model->fetchCityCategories();
		$this->load->view('job',$result);
		$this->load->view('Jobseeker_footer',$result);
		}else{
			redirect(base_url('Login'));
		}
	}
	public function Jobapply(){
		if($this->session->userdata('loggedIn')){
			$apusid=$this->input->post('apusid');
			$apjbid=$this->input->post('apjbid');
			$apcreated=$this->input->post('apcreated');
			$apseen=$this->input->post('apseen');
			$response1=$this->Home2_model->checkApply($apjbid,$apusid,$apcreated,$apseen);
			if(count($response1)>0){
				echo "<script>" ;
				echo "alert('You already Applied to this job')";
				echo "window.location.href = '" . base_url() . "Jobseeker/Job';";
				echo "</script>";
			}
			else{
				$jobArray=array(
					//Getting in array to apply for a job
					'user_id'=>$this->input->post('apusid'),
					'job_id'=>$this->input->post('apjbid'),
					'apply_date'=>$this->input->post('apcreated'),
					'seen'=>$this->input->post('apseen')
				);
				$response2=$this->Home2_model->applyJob($jobArray);
				if($response2==true){
				echo "<script>";
				echo "alert('You Applied to this job Successfully');";
                echo "window.location.href = '" . base_url() . "Jobseeker/Job';";
				echo "</script>";
				}else{
					echo "<script>alert('Something gone wrong')</script>";
				}
			}
			
		}else{
			redirect(base_url('Login'));
		}
	}
	public function favouraite(){
		if($this->session->userdata('loggedIn')){
          $user_id=$this->input->post('user_id');
		  $job_id=$this->input->post('job_id');
		  $created=$this->input->post('created');
		  $response1=$this->Home2_model->checkFavouraite($user_id,$job_id,$created);
			if(count($response1)>0){
				$response2=$this->Home2_model->deleteFavouraite($user_id,$job_id,$created);
				if($response2==true){
				    echo "<script>window.location.href = '" . base_url() . "Jobseeker';alert('Favourite Removed.');</script>";
				}else{
					echo "<script>window.location.href = '" . base_url() . "Jobseeker';alert('Something gone wrong ! Unable to Remove Favourite.');</script>";
				}

			}else{

		$favouraiteArray=array(
          'user_id'=>$this->input->post('user_id'),
		  'job_id'=>$this->input->post('job_id'),
		  'created_at'=>$this->input->post('created'),
		);
		$response2=$this->Home2_model->addFavouraite($favouraiteArray);
				if($response2==true){
				echo "<script>";
				echo "alert('Favouraite Added');";
                echo "window.location.href = '" . base_url() . "Jobseeker';";
				echo "</script>";
				}else{
					echo "<script>alert('Something gone wrong')</script>";
				}

	}
   }else{
	redirect(base_url('Login'));
   }
}
	
}