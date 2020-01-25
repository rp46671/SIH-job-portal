<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login_controller extends CI_Controller 
{
    
    
    public function authenticate()  
    {  
        $this->load->model('login_model');  
    
        if ($this->login_model->log_in_correctly())  
        {       redirect('Main/Login_page');
   
   
       }else
       {
             redirect('Main/dashboard');
   
       }
          
     
       }
  
     
}
    