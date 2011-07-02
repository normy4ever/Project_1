<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('table');
	}

	function index()
	{
		$data1['title'] = 'CazareCarei.ro';
		

		//$this->load->view('header');
		$this->load->view('detail_page');
		//$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */