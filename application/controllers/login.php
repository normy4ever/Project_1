<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library(array('form_validation','SimpleLoginSecure','encrypt'));			
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
		
		
		function logout()
		{
			$this->simpleloginsecure->logout();
			redirect('');
		}
		
		
        function index()
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
					$this->load->view('error_page');
			}
		}
					
	}
	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */