<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_Controller extends CI_Controller 
{

	public function network()
	{
		$this->load->view('headermain1');
		$this->load->view('recruiter/main_sidebar_recruiter');
		$this->load->view('recruiter/network_view');
		$this->load->view('Footermain');	
	}
}