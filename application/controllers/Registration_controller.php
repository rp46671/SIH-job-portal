<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Registration_controller extends CI_Controller
{
	function savingdata1()
	{
		$this->load->model('Registration_model','rm');
		$this->rm->register();
		
	}
}
?>