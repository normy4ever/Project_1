<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('table'));
	}

	function index()
	{
		$data1['title'] = 'CazareinCarei.eu';
		
		$tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="menu_table">' );

		$this->table->set_template($tmpl); 
		
		$this->table->add_row(anchor('', 'Cauta', 'title="Cauta"'));
		$this->table->add_row(img('img/valaszto.png'));
		$this->table->add_row(anchor('/add','Adauga cazare'));
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