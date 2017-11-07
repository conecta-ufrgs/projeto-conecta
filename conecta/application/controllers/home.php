<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pghome');
		$this->load->view('/pgmodelos/rodape');
	}

	public function sobre()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgsobre');
		$this->load->view('/pgmodelos/rodape');
	}

	
}
