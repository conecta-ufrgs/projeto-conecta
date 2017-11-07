<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes extends CI_Controller {

	
	public function index()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgadmin');
		$this->load->view('/pgmodelos/rodape');
	}

	





}