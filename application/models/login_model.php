<?php

class Login_model extends CI_Model
{
    function __Construct()
	{
		parent::__construct();
	}
	
        
        function get_users($lastname)
        {
            $this->load->database();
            $this->db->select('user_email');
            $this->db->from('ccusers');
            $query = $this->db->get();
            return $query->row();
        }
    
              
        function check_login_data($username, $password)
        {    
            $query = $this->db->select('user_email, user_pass');
            $query = $this->db->from('ccusers');
            $query = $this->db->where('user_email', $username);
            $query = $this->db->where('user_pass', $password);
            $query = $this->db->get();
            
            if($query->num_rows() > 0)
            { return $query->result(); }
            else
            { return false;}
        }
		
		 function check_uname($usern)
        {
			$res='No such account!';  
			$this->db->select('*');
			$this->db->where('user_email', $usern); 
			$query= $this->db->get('ccusers');
				if($query->num_rows() > 0)
				{
				   $res='Acest cont exista deja!';  
				}
			return $res;
			
		}
		
		
    }
?>