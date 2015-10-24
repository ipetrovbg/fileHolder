<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('header/header_view', $data);
		$this->load->view('dashboard_template', $data);
		$this->load->view('footer/footer_view', $data);
	}
}
