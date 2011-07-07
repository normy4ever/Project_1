
<?php
class Add_model extends CI_Model {
	
		
	function __Construct()
	{
		parent::__construct();
	}
	
	function check_duplicate_cname($cname)
	{
		$res='No such User!';  
		$this->db->select('*');
		$this->db->where('name', $cname); 
		$query= $this->db->get('cazarea');
			if($query->num_rows() > 0)
			{
			   $res='User exists!';  
			}
		return $res;
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
		
		if($tv=='accept')
		{
			$tv=true;
		}
		if($frigider=='accept')
		{
			$frigider=true;
		}
		if($internet=='accept')
		{
			$internet=true;
		}
		if($grill=='accept')
		{
			$grill=true;
		}
		if($apac=='accept')
		{
			$apac=true;
		}
		
		/*$array['tv']=$tv;
		$array['frigider']=$frigider;
		$array['internet']=$internet;
		$array['grill']=$grill;
		$array['apac']=$apac;
		
		foreach ($array as $row)
			{
			   if($row->value()='accept') $array[$row]='1';
			}
		*/
		
		
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



