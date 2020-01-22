<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('front');
		$this->load->view('header');
		$this->load->view('footer');
		
	}
	public function dashboard()
	{
		$this->load->view('headermain1');
		$this->load->view('MainSidebar_users');
		
		$this->load->view('dashboard');
		$this->load->view('Footermain');
		
	}
	public function users_main()
	{
		$this->load->view('headermain1');
		$this->load->view('MainSidebar_users');
		
		$this->load->view('users_main');
		$this->load->view('Footermain');
		
	}
}
