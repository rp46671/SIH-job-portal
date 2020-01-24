<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruiter_controller extends CI_Controller {

	public function dashboard()
	{
		$this->load->view('headermain1');
		$this->load->view('recruiter/main_sidebar_recruiter');
		$this->load->view('dashboard');
		$this->load->view('Footermain');	
	}
}