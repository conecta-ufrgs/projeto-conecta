<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	
	public function index()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgaluno');
		$this->load->view('/pgmodelos/rodape');
	}

	public function login()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgalunologin');
		$this->load->view('/pgmodelos/rodape');
	}


	
	}




