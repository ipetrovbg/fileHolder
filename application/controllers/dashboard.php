<?php


class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('dashboard_model');
		$this->load->model('files_model');
		$this->load->model('user_model');

	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		   {
		    $session_data = $this->session->userdata('logged_in');

		    $data['username'] = $session_data['username'];

		    $data['id'] = $session_data['id'];

		    $data['files'] = $this->files_model->getAllUserFiles($data['id']);

		    $data['user_info'] = $this->user_model->getInfo($data['id']);

			$data['title'] = "Dashboard";

			$this->load->view('header/header_view', $data);
			$this->load->view('dashboard_template', $data);
			$this->load->view('footer/footer_view');
		   }
		   else
		   {
		     //If no session, redirect to login page
		     redirect('login', 'refresh');
		   }
		
		
	}
}
