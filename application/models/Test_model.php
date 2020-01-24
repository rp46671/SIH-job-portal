<?php
class Test_model extends CI_Model
{
	
	function getQuestion()
		{
			$query = $this->db->get("test");
		return $query->result();

		
		}
}