<?php
class Add_model extends CI_Model {
	
		
	function __Construct()
	{
		parent::__construct();
	}
	
	
	function add_cazare($name,$description,$room,$pers,$dists,$distc,$parcare,$cname,$caddress,$ctel,$cemail){
		
		$data = array(
					'cazare_id' => '',
					'owner_id' => $this->session->userdata('user_id'),
					'name' => $name,
					'description' => $description,
					'add_date' => date('c'),
					'nr_room' => $room,
					'max_pers' => $pers,
					'dist_strand' => $dists,
					'dist_centru' => $distc,
					'parcare_in' => $parcare,		
					'contact_name' => $cname,
					'cazare_address' => $caddress,
					'contact_tel' => $ctel,
					'contact_email' => $cemail
				);

		$this->db->set($data); 

		if(!$this->db->insert('cazarea')) //There was a problem! 
			return false;						
			
	}
	
	function add_extras($cid,$tv,$frigider,$internet,$grill,$apac){
		
		$data = array(
					'cazare_id' => $cid,
					'tv' => $tv,
					'frigider' => $frigider,
					'internet' => $internet,
					'grill' => $grill,
					'apacalda' => $apac
				);

		$this->db->set($data); 

		if(!$this->db->insert('extras')) //There was a problem! 
			return false;
	
	}
	
	function return_cid($value){
		
		//$query = $this->db->query("SELECT cazare_id FROM cazarea WHERE name='".$value."'");
		
		$this->db->select('cazare_id');
		$this->db->where('name', $value); 
		$val= $this->db->get('cazarea');
			foreach ($val->result() as $row)
			{
			   return $row->cazare_id;
			}
  			  		 
	}
}



