<?php 
class Dashframe extends CI_Controller {

public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('Home_model');
}

public function index()
{
    $this->load->helper('url');
    $this->load->view('head');
    
    $this->load->view('dashframe');
    
    
}
}
?>