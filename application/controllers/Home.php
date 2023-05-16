<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Home_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
        $this->load->view('head');
        $this->load->view('noheader');
		$result['jobCategories']=$this->Home_model->fetchJobCategories();
		$result['cityCategories']=$this->Home_model->fetchCityCategories();
		$result['topCategories']=$this->Home_model->fetchTopCategories();
		$result['browsedEmployees']=$this->Home_model->fetchBrowsedEmployees();
		$result['browsedCities']=$this->Home_model->fetchBrowsedCities();
		$this->load->view('index',$result);
        $this->load->view('footer',$result);
	}
	public function noaboutus(){
        $this->load->view('head');
        $this->load->view('noheader');
		$this->load->view('noaboutus');
		$result['topCategories']=$this->Home_model->fetchTopCategories();
        $this->load->view('footer',$result);
	}
	public function Nojob(){
		
        $this->load->view('head');
        $this->load->view('noheader');
		$result['jobs']=$this->Home_model->fetchJobs();
		$result['jobCategories']=$this->Home_model->fetchJobCheckCategories();
		$result['cityCategories']=$this->Home_model->fetchCityCategories();
		$this->load->view('nojob',$result);
		$result['topCategories']=$this->Home_model->fetchTopCategories();
        $this->load->view('footer',$result);
	}
	public function Nocontact(){
		
        $this->load->view('head');
        $this->load->view('noheader');
        $this->load->view('nocontact');
		$result['topCategories']=$this->Home_model->fetchTopCategories();
        $this->load->view('footer',$result);
	}
	public function Notfound(){
		$this->load->view('head');
		$this->load->view('404');
	}
	public function sendEmail(){
		$this->load->config('email');
        $this->load->library('email');
        
       
	}
}
