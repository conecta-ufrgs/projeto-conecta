<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Desafios extends CI_Controller {

	
	public function index()
		{
			$this->load->view('/pgmodelos/cabecalho');
			$this->load->view('pgdesafios');
			$this->load->view('/pgmodelos/rodape');
		}


		//metodo para verificar user em sessao.

	//public function verifica_sessao()
	//	{

	//		if ($this->session->userdata('logado') == false)

	//		{

	//			redirect('Desafios/login');

	//		}

	//	}
	
	public function cadastrodesafiante()
		{
			$this->load->model('Desafiante_model', 'Desafiante');
			$this->load->view('/pgmodelos/cabecalho');
			$this->load->view('pgdesafiantecad');
			$this->load->view('/pgmodelos/rodape');
		}

	public function login()
		{
			$this->load->view('/pgmodelos/cabecalho');
			$this->load->view('pgdesafiantelogin');
			$this->load->view('/pgmodelos/rodape');

		}

	public function dentro()
		{	
			//$this->logged();
			$this->load->view('/pgmodelos/cabecalho');
			$this->load->view('pgdesafianteloged');
			$this->load->view('/pgmodelos/rodape');

		}



	public function salvar()
		{
			$this->load->model('Desafiante_model', 'Desafiante');

			if ($this->input->post('nome') == NULL) {
				echo 'O compo Nome é obrigatório.';
											
				echo '<a href="<?= base_url()?>Desafios/cadastrodesafiante" title="voltar">Voltar</a>';
				

				} else {
										
						$this->load->model('Desafiante_model', 'Desafiante');
						
						$dados['nome'] = $this->input->post('nome');
						$dados['cpf'] = $this->input->post('cpf');
						$dados['fone'] = $this->input->post('fone');
						$dados['email'] = $this->input->post('email');
						$dados['senha'] = sha1($this->input->post('senha'));
						$dados['empresa'] = $this->input->post('empresa');
						
						//Verifica se foi passado via post a id do Desafiante
							if ($this->input->post('id') != NULL) {		
								//Se foi passado o id o script  vai fazer atualização no registro.	
								$this->Desafiante->editDesafiante($dados, $this->input->post('id'));
							} else {
								//Se Não foi passado id do Desafiante vai adicionar um novo registro na tabela
								$this->Desafiante->addDesafiante($dados);
							}		
						
					 		
						redirect("/Desafios");	
					}		

		}


	public function sair()

			{

				$this->session->sess_destroy();
				redirect("/Desafios");

			}


	
	public function entrar()

		{
			//print_r($this->input->post());

			//$email = this->input->post('email');
			//$senha = sha1(this->input->post('senha'));

			$this->load->model('Desafiante_model','Desafiante');

			$query = $this->Desafiante->validate();
			print_r($query);

			//if ($query) { // VERIFICA LOGIN E SENHA
                //$data = array(
                 //   'email' => $this->input->post('email'),
                 //   'logged' => true
               // );

               // print_r($data);
                //$this->session->set_userdata($data);

               // redirect('Desafios/dentro');
            //} //else {
                //redirect('Desafios/login');
                
            //}
        }

			//$data['desafiante'] = $this->Desafiante->getDesafiante();
			//echo'<pre>';
			//print_r($data['desafiante']);
			//echo'<pre>';
			//$dados['email'] = this->input->post('email');
			//$dados['senha'] = sha1(this->input->post('senha'));

			//echo'<pre>';
			//print_r($dados[]);
			//echo'<pre>';

		//}


			//$email = this->input->post('email');
			//$senha = sha1(this->input->post('senha'));

			//$this->Desafiante->where('email',$email);
			//$this->Desafiante->where('senha',$senha);
			//$this->Desafiante->where('status',1);

			//$data['teste'] = $this->Desafiante->getDesafiante('desafiante')->result();
			//print_r($data);

	//		if(count($data['desafiante']) ==1){

	//				$dados['id_desafiante'] = $data['desafiante'] [0]->id_desafiante;
	//				$dados['nome'] = $data['desafiante'] [0]->nome;
	//				$dados['empresa'] = $data['desafiante'] [0]->empresa;
	//				$dados['logado'] = true;

	//				$this->session->set_userdata($dados);

	//				redirect("/Desafios/loged");
	//			}

				

	//			else{

	//						redirect("/Home");

	//				}




			

		//}



		


}




