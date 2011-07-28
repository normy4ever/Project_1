<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('table');
		$this->load->helper(array('file','text'));
		$this->load->model('list_model');
	}
	
	function get_id($cid)
	{
		$cazarea = $this->list_model->return_cazare_item($cid);
		
		$extra = $this->list_model->return_extras_item($cid);
				//var_dump($extra);
				//foreach($extra as $row => $data)
					//$data2[$row]=$data;
					
		
		//var_dump($extra);
		$data=array_merge ($cazarea, $extra);
		//$data1['title'] = 'CazareinCarei.ro';
		//var_dump($cazarea);
		//$this->load->view('header');
		$this->load->view('detail_page',$data);
		//$this->load->view('footer');
	}

	function index($cid)
	{
		$data1['title'] = 'CazareinCarei.ro';
		
		
		
		
		//var_dump($cid);
		

		//$this->load->view('header');
		$this->load->view('detail_page',$cazarea);
		//$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */