<?php
class Mdl_royal_ruleta extends CI_Model{
    var $registro;
    var $galeria;
    var $baul;
    var $usuarios;

    function __construct(){
        parent::__construct();
        $this->registro = 'royal_ruleta';
        $this->galeria = 'royal_ruleta';
        $this->baul = 'royal_ruleta';
        $this->usuarios = 'usuarios';
        $this->load->database('royal');
    }

	//recupera info del premio
	function getCodigo($codigo){

		$this->db->where('codigo',$codigo);
		$codData=$this->db->get('ruleta_serial');
		if ($codData->num_rows()>0)
			return current($codData->result());
		else
			return "0";
	}

 ////////

    function verificarUser($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return TRUE;
    	else
    		return FALSE;
    }
            
    function getRegistradoAmigos($id){
    	$this->db->select('*');
    	$this->db->from("halloween_invitados");
    	$this->db->where('id_user', $id);
    	$this->db->where('estado', "1");
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0){
    		return $consulta->num_rows();
    	}else
    		return FALSE;
    }
   
    function buscarUser($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return current($consulta->result());
    	else    		
    		return false;
    	}
    	
    function buscarUserFbid($id){
    		$this->db->select('*');
    		$this->db->from($this->registro);
    		$this->db->where('fbid', $id);
    		$consulta = $this->db->get();
    		if ($consulta->num_rows() > 0)
    			return current($consulta->result());
    		else
    			return false;
    	}	
        
    function getUser($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return current($consulta->result());
    }   
    
    function obtenerRegistro($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	return current($consulta->result());
    }
    
    // recupera cuantos ya a compartido el usuario
    function obtenerCampartidos($id)    {
    	$this->db->select('compartidos');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	return current($consulta->result());
    }    

  function listarusuariosregistrados(){
    	$query = $this->db->query("SELECT reg.id_user,usu.completo, usu.cedula, usu.ciudad, usu.telefono, usu.mail, reg.fnacimiento, reg.compartidos, (select count(*) 
					   			   from samsung_galeria_galaxy gal  
                                   where reg.id_user = gal.id_user)total 
                                   FROM samsung_registro_galaxy reg, samsung_usuarios usu 
                                   where reg.id_user = usu.id
order by total desc" );
    		if ($query->num_rows() > 0)
    			return $query->result();
    }
    
    function listargaleriaregistrados($id){
    	$this->db->select('*');
    	$this->db->from("galeria_galaxy");
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return $consulta->result();
    }

}