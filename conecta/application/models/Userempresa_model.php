<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userempresa_model extends CI_Model{

	
	public function getUser()

	{

		$query = $this->db->get('user_empresa');

		return  $query->result();

	}

    public function addUser($dados=NULL)

	{

	if ($dados != NULL):
		$this->db->insert('user_empresa', $dados);

	endif;

	} 

    public function getUserByID($id=NULL)
    {
    if ($id != NULL):
        
        $this->db->where('id', $id);        
            
        $this->db->limit(1);
        
        $query = $this->db->get("user_empresa");        
        
        return $query->row();   
    endif;
    } 

   
    public function editUser($dados=NULL, $id=NULL)
    {
       
    if ($dados != NULL && $id != NULL):
        //Se checagem ok - vai a atualizacao
        $this->db->update('user_empresa', $dados, array('id'=>$id));      
    endif;
    }   

    
    public function delUser($id=NULL){
        
        if ($id != NULL):
            //Executa a função DB DELETE
            $this->db->delete('user_empresa', array('id'=>$id));            
        endif;
    }  




}