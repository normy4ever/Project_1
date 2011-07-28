<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../pictures');
		$this->load->helper(array('form','file'));
		$this->load->library(array('table'));
		$this->load->model(array('gallery_model','add_model'));
		
	}
	
	function finalize()
    {
	   $this->session->set_userdata('finished', 'true');
	   $this->session->set_flashdata('message', 'Cazarea creata!');
       redirect('home');
	}
	
	function validate_cname($x)
	{
		$name = $x;
		//log_message('info', 'ERRRRRRRRRRRRRRRRRRRR: '.$name);
		$res = $this->add_model->check_duplicate_cname($name);
		//log_message('info', 'ERRRRRRRRRRRRRRRRRRRR: '.$res);
		echo $res;
	}
	
	function remove_pic($file)
	{
		$cid = $this->session->userdata('CID');
		unlink($this->gallery_path.'/'.$cid.'/'.$file);
		unlink($this->gallery_path.'/'.$cid.'/thumbs/'.$file);
		redirect('add/continue_up');
	}
	
	function continue_up()
	{
		$cid=$this->session->userdata('CID');
		
		$data2 = $this->gallery_model->get_images($cid);
		
		$data1['title'] = 'CazareinCarei.eu';
		
		if(isset($data2))
		{
			$data3['img_exists']='true';
			//$this->table->set_heading('img', 'action');
			foreach($data2 as $file)
				$this->table->add_row(img('pictures/'.$cid.'/thumbs/'.$file), anchor('add/remove_pic/'.$file, 'sterge', 'title="Sterge imaginea"'));
		}
		
		
		$this->load->view('header',$data1);
		$this->load->view('add_page_f',$data3);
		$this->load->view('footer');
	}
	
	function photo_up()
	{
		$cid = $this->session->userdata('CID');
		$this->gallery_model->do_upload($cid);
		redirect('add/continue_up');
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
					$this->input->post('pret'),
					$this->input->post('dists'),
					$this->input->post('distc'),
					$this->input->post('cname'),
					$this->input->post('caddress'),
					$this->input->post('ctel'),
					$this->input->post('cemail'));
					
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
					$this->input->post('apac'),
					$this->input->post('parcare'));
					
					$this->session->set_userdata('CID', $CID);
					
			$data2 = 'add_page_f';
		}
		
		$data3['img_exists']='false';
		
		//if(isset($this->session->userdata('logged_in')))
		//{
			$this->load->view('header',$data1);
			$this->load->view($data2,$data3);
			$this->load->view('footer');
		//}
		//else
		//{}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */