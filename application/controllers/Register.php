<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Register_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
        $this->load->helper('url');
        $this->load->view('head');
        //$this->load->view('noheader');
		$this->load->view('register');
        $this->load->view('login_footer');
	}
	public function add(){
		    $this->load->helper('url');
			$this->load->library('form_validation');
		if($this->input->post('register')){
			$this->form_validation->set_rules('usertype', 'User_type', 'trim|required');
			$this->form_validation->set_rules('name', 'Course Name', 'trim|required|is_unique[tbl_users.email]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[tbl_users.email]');
 	 		$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('register_date', 'Registrationdate', 'trim|required');
 		 if ($this->form_validation->run() == FALSE) {
				$data = array(
 				'errors' => validation_errors()
	 			);
				redirect(base_url('Register'),'refresh');
		}
	 else{
		$data = array(
			'user_type' => $this->input->post('usertype'),
			'name' => $this->input->post('name'),
		 	'email' => $this->input->post('email'),
		 	'password'=>md5($this->input->post('password')),
			'phone' => $this->input->post('phone'),
			'register_date' => $this->input->post('register_date'),
		 );
		$result= $this->Register_model->add_user($data);
		if($result==true){
		    redirect(base_url('Login'));
		}
		else{
			redirect(base_url('Register'),'refresh');
		}
	}
}
}
}
 ?>
