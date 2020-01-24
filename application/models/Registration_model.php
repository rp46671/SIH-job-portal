<?php
class Registration_model extends CI_Model
{
	
	function register()

	{
		$data = array(
		'Username' =>$this->input->post('txtUsername'),
		'Password' => $this->input->post('txtPwd'),
		'User_Id' => $this->input->post('userid'),
		//$email = $this->input->post('email_id');
		'Contact_no' => $this->input->post('contact_no'),
		'Question' => $this->input->post('txtquestion'),
		'Answer' => $this->input->post('txtanswer'),

		);
		
	$this->db->insert('signup',$data);

	}
}
