<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Desafiante_model extends CI_Model{

	
	public function getDesafiante()

	{

		$query = $this->db->get('desafiante');

		return  $query->result();

	}

    public function addDesafiante($dados=NULL)

	{

	if ($dados != NULL):
		$this->db->insert('desafiante', $dados);

	endif;

	} 

    public function getDesafianteByID($id=NULL)
    {
    if ($id != NULL):
        
        $this->db->where('id', $id);        
            
        $this->db->limit(1);
        
        $query = $this->db->get("desafiante");        
        
        return $query->row();   
    endif;
    } 

   
    public function editDesafiante($dados=NULL, $id=NULL)
    {
       
    if ($dados != NULL && $id != NULL):
        //Se checagem ok - vai a atualizacao
        $this->db->update('desafiante', $dados, array('id'=>$id));      
    endif;
    }   

    
    public function delDesafiante($id=NULL){
        
        if ($id != NULL):
            //Executa a função DB DELETE
            $this->db->delete('desafiante', array('id'=>$id));            
        endif;
    }  




    public function validate() {
            $this->db->where('email', $this->input->post('email')); 
            $this->db->where('password', sha1($this->input->post('password')));
            $this->db->where('status', 1); // Verifica o status do usuário

            $query = $this->db->get('desafiante'); 

            if ($query->num_rows == 1) { 
                return true; // RETORNA VERDADEIRO
                //return $query->result();
                //print_r($query); 
            }
    }


    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    public function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina. <a href="http://oficina2015/login">Efetuar Login</a>';
            die();
        }
    }






}