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
			$this->form_validation->set_rules('check', 'password', 'required');
			$this->form_validation->set_error_delimiters('<em>','</em>');
			
			if($this->input->post('create_acc'))
			{
				if($this->form_validation->run())
				{
					$user_name = $this->input->post('user_name');
					$user_pass = $this->input->post('user_pass');
					
					
						if($this->simpleloginsecure->create($user_name, $user_pass)) {
								// user has been created
								$this->session->set_flashdata('message', 'Cont creat.');
								redirect('home');
							}
							else
							{
								$this->session->set_flashdata('message', 'Aceasta adressa email e deja inregistrata!');
								redirect('home');
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
			
			
			if($this->input->post('login'))
			{
				if($this->form_validation->run())
				{
					$user_name = $this->input->post('user_name');
					$user_pass = $this->input->post('user_pass');
					
					//$user_name=str_replace('x-x', '@' , $user_name);
					
					if($this->simpleloginsecure->login($user_name, $user_pass))
						{
							// user has been logged in
							//$this->session->set_flashdata('message', 'USER LOGGED IN.');
							redirect('');
							//return true;
						}
						else
						{
							//return false;
							//redirect('');
							$this->session->set_flashdata('message', 'Date gresite! Mai incearca.');
							redirect('');
							
						}
				}
			}
			else
			{
					//return false;
					$this->load->view('error');
			}
		}
		
	
	function prelogin($user_name, $user_pass)
        {
			$user_name=str_replace('x-x', '@' , $user_name);      
			//echo $user_name;      		
			if($this->simpleloginsecure->login($user_name, $user_pass))
				{
					return true;
				}
				else
				{

					return "nope";
					
				}
		}
	
		
		
	function validate_user($x)
	{
		
		$name=str_replace('x-x', '@' , $x); 
		$res = $this->login_model->check_uname($name);
		echo $res;
		return $res;		
	}	
		
		
	function logout()
	{
		$this->simpleloginsecure->logout();
		redirect('home');
	}


	function despre()
	{
		$data2['despre']='list';
		$data1['title'] = 'CazareinCarei.eu';
		
		$tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="menu_table">' );

		$this->table->set_template($tmpl); 
		
		$this->table->add_row(anchor('/listall', 'Caută', 'title="Caută"'));
		$this->table->add_row(img('img/valaszto.png'));
		if($this->session->userdata('user'))
		{
			$this->table->add_row(anchor('/add','Adaugă cazare'));
		}
		else
		{
			$this->table->add_row(anchor('home/login','Adaugă cazare',array('class'=>'modalInput','rel'=>'#login_window')));
		}
		$this->table->add_row('&nbsp');
		$cell = array('id' => 'smallmenu');
		$this->table->add_row(anchor('/listall','Listează toate ofertele', $cell));
		$this->table->add_row('&nbsp');
		//$this->table->add_row('<li href="" id="despre_b" class = "smallmenu"> ASD </li>'); 
		$this->table->add_row(anchor('home/despre','Despre Carei', $cell));
		
		$this->load->view('header',$data1);
		
			$this->load->view('home_page',$data2);
		
		$this->load->view('footer');	
	}



	function index()
	{
		$data1['title'] = 'CazareinCarei.eu';
		
		$tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="menu_table">' );

		$this->table->set_template($tmpl); 
		
		$this->table->add_row(anchor('/listall', 'Caută', 'title="Caută"'));
		$this->table->add_row(img('img/valaszto.png'));
		if($this->session->userdata('user'))
		{
			$this->table->add_row(anchor('/add','Adaugă cazare'));
		}
		else
		{
			$this->table->add_row(anchor('home/login','Adaugă cazare',array('class'=>'modalInput','rel'=>'#login_window')));
		}
		$this->table->add_row('&nbsp');
		$cell = array('id' => 'smallmenu');
		$this->table->add_row(anchor('/listall','Listeează toate ofertele', $cell));
		$this->table->add_row('&nbsp');
		//$this->table->add_row('<li href="" id="despre_b" class = "smallmenu"> ASD </li>'); 
		$this->table->add_row(anchor('home/despre','Despre Carei', $cell));
		
		$this->load->view('header',$data1);
		
			$this->load->view('home_page');	
		
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */