<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('table'));
	}

	function index($mes)
	{
		$data1['title'] = 'Error';
		
		$mes['error'] = 'error';
		
		$this->load->view('header');
		$this->load->view('error_page',$mes);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */