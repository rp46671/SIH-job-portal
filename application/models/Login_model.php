<?php  
  
class Login_model extends CI_Model
 {  
   public function log_in_correctly()
       {  
        $user_ = $this->input->post('user_');
        $pwd = $this->input->post('pwd');

        $this->db->where('Username', $user_);  
        $this->db->where('Password', $pwd);  
        $query = $this->db->get('signup');  
  
        if($query->num_rows() == 1)  
        {  
          $this->session->set_userdata('user', $user_);
            
        return true;  
        } 
        else {  
            return false;  
        }  
  }
    
}  
?>  