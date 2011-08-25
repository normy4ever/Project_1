<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listall extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('table'));
		$this->load->helper(array('file','text'));
		$this->load->model('list_model');
	}
	
	
	function index()
	{
		$data1['title'] = 'CazareCarei.ro';
		$data1['link'] = 'yes';
		$data2=array();
		
		$cazari = $this->list_model->return_cazare_table();
					
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
			
		//var_dump($data2);	
		
		$this->load->view('header',$data1);
		
		$this->load->view('list_page',$data2);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */