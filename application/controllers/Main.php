<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('front');
		$this->load->view('headermain1');
				
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('Footermain');		
		
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

	public function Registration_page()
	{
		$this->load->view('headermain1');
		$this->load->view('Registration');
		$this->load->view('Footermain');
	}

	public function Networking_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Networking_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
public function Marketing_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Marketing_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Ios_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Ios_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Dba_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Dba_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Hr_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Hr_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Graphic_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Graphic_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Android_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Android_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Webdevelopment_job()
	{
		//$this->load->view('front');
		$this->load->view('headermain1');
		//$this->load->view('navbar');
		$this->load->view('MainSidebar_users');
		$this->load->view('Webdevelopment_job');
		//$this->load->view('Footer');
	
		$this->load->view('Footermain');
	}
	public function Login_page()
		{
				$this->load->view('headermain1');
				$this->load->view('Login');
				$this->load->view('Footermain');
		}

	public function Forget_password()
		{
				$this->load->view('headermain1');
				$this->load->view('Forget_password');
				$this->load->view('Footermain');		
		}
public function Job_Search()
		{
				$this->load->view('headermain1');
				$this->load->view('Forget_password');
				$this->load->view('Footermain');		
		}
public function Upload_Resume()
		{
				$this->load->view('headermain1');
				$this->load->view('MainSidebar_users');
				$this->load->view('upres');
				$this->load->view('Footermain');		
		}
public function Result_Credit()
		{
				$this->load->view('headermain1');
				$this->load->view('Forget_password');
				$this->load->view('Footermain');		

		}



public function Response()
		{
				$this->load->view('headermain1');
				$this->load->view('Forget_password');
				$this->load->view('Footermain');		
		}

public function Study_Resourse()
		{
				$this->load->view('headermain1');
				$this->load->view('MainSidebar_users');
				$this->load->view('study');
				$this->load->view('Footermain');		
		}

public function  F_A_Q()
		{
				$this->load->view('headermain1');
				$this->load->view('Forget_password');
				$this->load->view('Footermain');		
		}

public function FeedBack()
		{
				$this->load->view('headermain1');
				$this->load->view('MainSidebar_users');
				
				$this->load->view('feedback');
				$this->load->view('Footermain');		
		}
	public function Given_Test()
		{
				$this->load->view('headermain1');
				$this->load->view('MainSidebar_users');
				$this->load->view('give_test');
				//$this->load->view('dashboard');
				$this->load->view('Footermain');		
		}
	public function Networking_Test()
		{
				$this->load->view('headermain1');
				$this->load->view('MainSidebar_users');
				$this->load->view('Network_test');
				//$this->load->view('dashboard');
				$this->load->view('Footermain');		
		}

	public function job_cat()
		{
				$this->load->view('headermain1');
				$this->load->view('MainSidebar_users');
				$this->load->view('job_category');
				//$this->load->view('dashboard');
				$this->load->view('Footermain');		
		}
	}



        
                   
                  
                  
                                                     
                  

