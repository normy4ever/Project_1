<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->library(array('table'));
		$this->load->library(array('table','form_validation','SimpleLoginSecure','encrypt'));
		$this->load->model('login_model');
	}

	function create_account()
		{
			// SET VALIDATION RULES
			$this->form_validation->set_rules('user_name', 'username', 'required');
			$this->form_validation->set_rules('user_pass', 'password', 'required');
			$this->form_validation->set_error_delimiters('<em>','</em>');
			
			if($this->input->post('create'))
			{
				if($this->form_validation->run())
				{
					$user_name = $this->input->post('user_name');
					$user_pass = $this->input->post('user_pass');
					
					if($this->simpleloginsecure->create($user_name, $user_pass)) {
							// user has been created
							$this->session->set_flashdata('message', 'User created succesfully.');
							redirect('');
						}
						else
						{
							$this->session->set_flashdata('message', 'User could not created.');
							redirect('');
						}
				}
			}
		}
		
	function login()
        {
			            		
			// SET VALIDATION RULES
			$this->form_validation->set_rules('user_name', 'username', 'required');
			$this->form_validation->set_rules('user_pass', 'password', 'required');
			$this->form_validation->set_error_delimiters('<em>','</em>');
			
			// has the form been submitted and with valid form info (not empty values)
			
			if($this->input->post('login'))
			{
				if($this->form_validation->run())
				{
					$user_name = $this->input->post('user_name');
					$user_pass = $this->input->post('user_pass');
					
					if($this->simpleloginsecure->login($user_name, $user_pass)) {
							// user has been logged in
							$this->session->set_flashdata('message', 'USER LOGGED IN.');
							redirect('');
						}
						else
						{
							$this->session->set_flashdata('message', 'Incorrect password.');
							redirect('home');
						}
				}
			}
			else
			{
					$this->load->view('login_page');
			}
		}
		
		
		
	function validate_user($x)
	{
		$name = $x;
		$res = $this->login_model->check_uname($name);
		echo $res;		
	}	
		
		
	function logout()
	{
		$this->simpleloginsecure->logout();
		redirect('home');
	}






	function index()
	{
		$data1['title'] = 'CazareinCarei.eu';
		
		$tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="menu_table">' );

		$this->table->set_template($tmpl); 
		
		$this->table->add_row(anchor('', 'Cauta', 'title="Cauta"'));
		$this->table->add_row(img('img/valaszto.png'));
		if($this->session->userdata('user'))
		{
			$this->table->add_row(anchor('/add','Adauga cazare'));
		}
		else
		{
			$this->table->add_row(anchor('home/login','Adauga cazare',array('class'=>'modalInput','rel'=>'#login_window')));
		}
		$this->table->add_row('&nbsp');
		$cell = array('id' => 'smallmenu');
		$this->table->add_row(anchor('/listall','Listeeaza toate ofertele', $cell));
		$this->table->add_row('&nbsp');
		$this->table->add_row(anchor('','Despre Carei', $cell));
		
		$this->load->view('header',$data1);
		$this->load->view('home_page');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */