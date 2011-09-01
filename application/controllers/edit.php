<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('table'));
		$this->load->helper(array('file','text'));
		$this->load->model(array('list_model','login_model'));
	}
	
	
	function update($cid)
	{
		if ($this->session->userdata('user'))
		{
			if ($this->input->post('update'))
			{	
				//$cid = $this->input->post('cazare_id');
			
				$data1 = array(
					   'name' => $this->input->post('name'),
					   'description' => $this->input->post('description'),
					   'nr_room' => $this->input->post('nr_room'),
					   'max_pers' => $this->input->post('max_pers'),
					   'pret' => $this->input->post('pret'),
					   'dist_strand' => $this->input->post('dist_strand'),
					   'dist_centru' => $this->input->post('dist_centru'),
					   'contact_name' => $this->input->post('contact_name'),
					   'cazare_address' => $this->input->post('cazare_address'),
					   'contact_tel' => $this->input->post('contact_tel'),
					   'contact_email' => $this->input->post('contact_email')
					);
					
				
					$tv=0;
					$frigider=0;
					$internet=0;
					$grill=0;
					$apacalda=0;
					$parcare_in=0;
				
					if($this->input->post('tv')=='accept')
					{
					   $tv = '1';
					}
					if($this->input->post('frigider')=='accept')
					{
					   $frigider = 1;
					}
					if($this->input->post('internet')=='accept')
					{
					   $internet = 1;
					}
					if($this->input->post('grill')=='accept')
					{
					   $grill = 1;
					}
					if($this->input->post('parcare_in')=='accept')
					{
					   $parcare_in = 1;
					}
					if($this->input->post('apacalda')=='accept')
					{
					   $apacalda = 1;
					}
					  
			
				$data2 = array(
						'tv' => $tv,
						'frigider' => $frigider,
						'internet' => $internet,
						'grill' => $grill,
						'apacalda' => $apacalda,
						'parcare_in' => $parcare_in);
						
				$this->db->update('cazarea', $data1, "cazare_id =".$cid );
		
				$this->db->update('extras', $data2, "cazare_id =".$cid );
				
				$this->session->set_flashdata('saved', 'yes');
								
				redirect(edit);
			}
		}
		
	}
	
	function deleteall($cidd)
	{
		$this->db->delete('cazarea', array('cazare_id' => $cidd)); 
		$this->db->delete('extras', array('cazare_id' => $cidd)); 
		
		$dir='pictures/'.$cidd;
		
		function rrmdir($dir) {
		   if (is_dir($dir)) {
			 $objects = scandir($dir);
			 foreach ($objects as $object) {
			   if ($object != "." && $object != "..") {
				 if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
			   }
			 }
			 reset($objects);
			 rmdir($dir);
		   }
		 } 
		
		
		
		$this->session->set_flashdata('deleted', 'yes');
		
		redirect(edit);
	}	
	
	function index()
	{
		$data1['title'] = 'CazareCarei.ro';
		$data1['link'] = 'yes';
		
			
		$un = $this->session->userdata('user');
		$uid = $this->login_model->get_uid($un);
		//var_dump($uid);
		$cazari = $this->list_model->return_user_owned($uid->user_id);
		//var_dump($cazari);		
		if($cazari)
		{	
			foreach ($cazari as $key => $value)
			{
				//var_dump($key);
				$x = $value->cazare_id;
				$extra = $this->list_model->return_extras_where($x);
				//var_dump($extra);
				foreach($value as $row => $data)
					$data2['item'][$x][$row]=$data;
					
				foreach($extra[$x] as $row => $data)
					$data2['item'][$x][$row]=$data;
			}
		}
		else
		{
			$data2['item'] = 'N/A';	
		}
		
		$this->load->view('header',$data1);
		$this->load->view('edit_page',$data2);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */