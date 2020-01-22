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
		$this->load->view('MainSidebar');
		
		$this->load->view('dashboard');
		$this->load->view('Footermain');
		
	}
}
