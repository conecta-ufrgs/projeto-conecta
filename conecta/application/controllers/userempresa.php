<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userempresa extends CI_Controller {

public function verifica_sessao()
	{

		if ($this->session->userdata('logado') == false){

			redirect('pgempresa/login');

		}

	}
	
	public function index()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgempresa');
		$this->load->view('/pgmodelos/rodape');
	}


	public function login()
	{
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgeusermpresalogin');
		$this->load->view('/pgmodelos/rodape');
	}


	public function useradd()
	{
		$this->load->model('Userempresa_model', 'Userempresa');
		$this->load->view('/pgmodelos/cabecalho');
		$this->load->view('pgempresauseradd');
		$this->load->view('/pgmodelos/rodape');
	}

	public function logar()

	{
		$this->load->model('Userempresa_model');
		$email = $this->input->post('e-mail');
		$senha = $this->input->post('senha');

		$this->db->where('e-mail',$email);
		$this->db->where('senha',$senha);
		$this->db->where('status',1);

		$data['userempresa'] = $this->db->get('user_empresa')->result();

		if(count ($data['userempresa']) ==1){

			$dados['nome'] = $data['userempresa'] [0]->nome;
			$dados['id_user'] = $data['userempresa'] [0]->id_user;
			$dados['cnpj_empresa'] =  $data['userempresa'] [0]->cnpj_empresa;
			$dados['logado'] = true;
			$this->session->set_userdata($dados);
			redirect('pguserempresaloged');

		}

	}


	public function usersave()
	{
		$this->load->model('Userempresa_model', 'Userempresa');

		if ($this->input->post('nome') == NULL) {
			echo 'O compo Nome é obrigatório.';
										
			echo '<a href="/conecta/pgempresa/cadastro" title="voltar">Voltar</a>';
			echo '<a href="/produtos/add" title="voltar">Voltar</a>';

			} else {
									
					$this->load->model('Userempresa_model', 'Userempresa');
					
					$dados['nome'] = $this->input->post('nome');
					$dados['e-mail'] = $this->input->post('e-mail');
					$dados['telefone'] = $this->input->post('telefone');
					$dados['senha'] = sha1($this->input->post('senha'));
					$dados['cnpj_empresa'] = $this->input->post('cnpj_empresa');
					
					//Verifica se foi passado via post a id da Empresa
						if ($this->input->post('id') != NULL) {		
							//Se foi passado o id o script  vai fazer atualização no registro.	
							$this->Userempresa->editUser($dados, $this->input->post('id'));
						} else {
							//Se Não foi passado id da Empresa vai adicionar um novo registro na tabela
							$this->Userempresa->addUser($dados);
						}		
					
				 		
					redirect("/pgempresa");	
				}		

	}



		


}
