<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_Controller extends CI_Controller 
{
	
	public function network()
	{  

		$this->load->model('Test_model','am');
		$data['ques'] = $this->am->getQuestion();
		$this->load->view('headermain1');
		$this->load->view('recruiter/main_sidebar_recruiter');
		$this->load->view('recruiter/network_view',$data);
		$this->load->view('Footermain');	
	}
}