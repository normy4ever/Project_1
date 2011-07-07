<?php
class List_model extends CI_Model {
	
		
	function __Construct()
	{
		parent::__construct();
	}
	
	function return_cazare_table()
	{
		$data=array();
		$query = $this->db->get('cazarea');

			foreach ($query->result() as $row)
			{
				$data[$row->cazare_id]=$row;
			}
			
		return $data;
	}
	
	function return_extras_table()
	{
		$data=array();
		$query = $this->db->get('extras');

			foreach ($query->result() as $row)
			{
				$data[$row->cazare_id]=$row;
			}
			
		return $data;
	}
	
	function return_extras_where($cid)
	{
		//var_dump($cid);
		$this->db->select('*');
		$this->db->where('cazare_id', $cid); 
		$query= $this->db->get('extras');
		//var_dump($query);
			foreach ($query->result() as $row)
			{
				//var_dump($row);
				$data[$row->cazare_id]=$row;
			}
			
		return $data;
	}
	
	
}



