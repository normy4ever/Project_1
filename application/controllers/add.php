<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

    
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','file'));
		$this->load->library(array('table'));
		$this->load->model(array('gallery_model','add_model'));
	}
	
	function finalize()
    {
	   $this->session->set_flashdata('message', 'Cazarea creata!');
       redirect('home');
	}

	function index()
	{
		$data1['title'] = 'CazareinCarei.eu';
		$data2 = 'add_page';
		if ($this->input->post('save')) {
			
			$this->add_model->add_cazare(
					$this->input->post('name'),
					$this->input->post('description'),
					$this->input->post('room'),
					$this->input->post('pers'),
					$this->input->post('dists'),
					$this->input->post('distc'),
					$this->input->post('parcare'),
					$this->input->post('cname'),
					$this->input->post('caddress'),
					$this->input->post('ctel'),
					$this->input->post('$cemail'));
					
					$name = $this->input->post('name');
					
					$CID = $this->add_model->return_cid($name);	
					//show_error($CID);
					
					//show_error($this->input->post('tv').$this->input->post('internet'));
					
			$this->add_model->add_extras(
					$CID,
					$this->input->post('tv'),
					$this->input->post('frigider'),
					$this->input->post('internet'),
					$this->input->post('grill'),
					$this->input->post('apac'));
					
					$this->session->set_userdata('CID', $CID);
					
			$data2 = 'add_page_f';
		}
		
		
		
		$this->load->view('header',$data1);
		$this->load->view($data2);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */