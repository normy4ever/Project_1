<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listall extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('table'));
	}
	
	
	function index()
	{
		$data1['title'] = 'CazareCarei.ro';
		
		$this->load->view('header',$data1);
		
		$this->load->view('list_page');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */