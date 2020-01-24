<?php
class stu2m extends CI_Model{
	function savingdata100()
	{
		$data = array(
			'Username' => $this->input->post('username')
			
		);
		
		$this->db->insert('signup',$data);

	}
}