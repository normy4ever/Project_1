<?php

   // class Login_model extends Model
    {

        function __Construct()
        {
            parent::Model();
        }
        
        function get_users($lastname)
        {
            $this->load->database();
            $this->db->select('ccusers');
            $this->db->from('ccname');
            $query = $this->db->get();
            return $query->row();
        }
    
              
        function check_login_data($username, $password)
        {    
            $query = $this->db->select('ccname, ccpass');
            $query = $this->db->from('ccusers');
            $query = $this->db->where('ccname', $username);
            $query = $this->db->where('ccpass', $password);
            $query = $this->db->get();
            
            if($query->num_rows() > 0)
            { return $query->result(); }
            else
            { return false;}
        }
    }

?>  