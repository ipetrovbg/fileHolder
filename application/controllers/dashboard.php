<?php


class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('dashboard_model');
		$this->load->model('files_model');

	}

	public function index()
	{
		
		$data['files'] = $this->files_model->getAllUserFiles();
		$data['title'] = $this->dashboard_model->shorter("Dashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard DashboardDashboard Dashboard", 30);

		$this->load->view('header/header_view', $data);
		$this->load->view('dashboard_template', $data);
		$this->load->view('footer/footer_view', $data);
	}
}
