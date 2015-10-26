<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct(){

		parent::__construct();

		$this->load->model('dashboard_model');
		$this->load->model('user_model');
	}

	public function index()
	 {
	 	if(!$this->session->userdata('logged_in')){ 
	 	$session_data = $this->session->userdata('logged_in');
	 	$data['username'] = $session_data['username'];
	 	$data['id'] = $session_data['id'];
	 	$data['user_info'] = $this->user_model->getInfo($data['id']);
	 	$data['title'] = "Login";
	   
	   $this->load->view('header/header_view', $data);
	   $this->load->helper(array('form'));
	   $this->load->view('login_view');
	   $this->load->view('footer/footer_view');
		}else{
			//If session, redirect to dashboard page
			 redirect('dashboard', 'refresh');
		}
	 }

}