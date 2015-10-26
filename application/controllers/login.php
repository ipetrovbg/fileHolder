<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct(){

		parent::__construct();

		$this->load->model('dashboard_model');
	}

	public function index()
	 {
	 	$data['title'] = $this->dashboard_model->shorter("Dashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard Dashboard", 30);
	   
	   $this->load->view('header/header_view', $data);
	   $this->load->helper(array('form'));
	   $this->load->view('login_view');
	   $this->load->view('footer/footer_view');
	 }

}