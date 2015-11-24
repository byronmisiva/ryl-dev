<?php

class Mdl_royal_ruleta extends CI_Model
{
    var $registro;
    var $galeria;
    var $baul;
    var $usuarios;

    function __construct()
    {
        parent::__construct();
        $this->registro = 'royal_ruleta';
        $this->galeria = 'royal_ruleta';
        $this->baul = 'royal_ruleta';
        $this->usuarios = 'usuarios';
        $this->load->database('royal');
    }

    //recupera info del premio
    function getCodigo($codigo, $cedula, $idvalidador)
    {
        $registro = $this->getUsuario($cedula);
        $data = array(
            'codigo' => $codigo,
            'id_usuario' => $registro->id,
            'info_registro' => json_encode($registro)
        );
        $this->db->where('id', $idvalidador);
        $this->db->update('ruleta_asigna_premios', $data);
        return 1;

    }

    //recupera info del premio
    function getCodigoGanador($codigo, $idcedula)
    {

        //validamos que ya no haya ganano el usuario
        $this->db->select('id_premio, id, fecha_ganador, asignado');
        $this->db->where('id_usuario = ', $idcedula);
        $codData1 = $this->db->get('ruleta_asigna_premios');
        if ($codData1->num_rows() > 0) {
            return "0";
        }

        $this->db->select('id_premio, id, fecha_ganador, asignado');
        $this->db->where('codigo = ',$codigo );
        $codData2 = $this->db->get('ruleta_asigna_premios');
        if ($codData2->num_rows() > 0) {
            return "0";
        }


        //todos existen pero pierden
        $this->db->select('id_premio, id, fecha_ganador, asignado');
        $this->db->where('asignado', '0');
        $this->db->where('fecha_ganador <', 'NOW()', FALSE);
        $this->db->order_by("fecha_ganador", "asc");
        $this->db->limit(1);
        $codData = $this->db->get('ruleta_asigna_premios');
        if ($codData->num_rows() > 0) {

            $recuperado = current($codData->result());
            $data = array(
                'asignado' => 1
            );
            $this->db->where('id', $recuperado->id);
            $this->db->update('ruleta_asigna_premios', $data);
            return $recuperado;
        } else
            return "0";
    }

    function getUsuario($cedula)
    {
        $this->db->where('cedula', $cedula);
        $codData = $this->db->get('royal_usuarios');
        if ($codData->num_rows() > 0)
            return current($codData->result());
        else
            return "0";
    }

    ////////

    function verificarUser($id)
    {
        $this->db->select('*');
        $this->db->from($this->registro);
        $this->db->where('id_user', $id);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0)
            return TRUE;
        else
            return FALSE;
    }

    function getRegistradoAmigos($id)
    {
        $this->db->select('*');
        $this->db->from("halloween_invitados");
        $this->db->where('id_user', $id);
        $this->db->where('estado', "1");
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0) {
            return $consulta->num_rows();
        } else
            return FALSE;
    }

    function buscarUser($id)
    {
        $this->db->select('*');
        $this->db->from($this->registro);
        $this->db->where('id_user', $id);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0)
            return current($consulta->result());
        else
            return false;
    }

    function buscarUserFbid($id)
    {
        $this->db->select('*');
        $this->db->from($this->registro);
        $this->db->where('fbid', $id);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0)
            return current($consulta->result());
        else
            return false;
    }

    function getUser($id)
    {
        $this->db->select('*');
        $this->db->from($this->registro);
        $this->db->where('id', $id);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0)
            return current($consulta->result());
    }

    function obtenerRegistro($id)
    {
        $this->db->select('*');
        $this->db->from($this->registro);
        $this->db->where('id_user', $id);
        $consulta = $this->db->get();
        return current($consulta->result());
    }

    // recupera cuantos ya a compartido el usuario
    function obtenerCampartidos($id)
    {
        $this->db->select('compartidos');
        $this->db->from($this->registro);
        $this->db->where('id_user', $id);
        $consulta = $this->db->get();
        return current($consulta->result());
    }

    function listarusuariosregistrados()
    {
        $query = $this->db->query("SELECT reg.id_user,usu.completo, usu.cedula, usu.ciudad, usu.telefono, usu.mail, reg.fnacimiento, reg.compartidos, (select count(*)
					   			   from samsung_galeria_galaxy gal  
                                   where reg.id_user = gal.id_user)total 
                                   FROM samsung_registro_galaxy reg, samsung_usuarios usu 
                                   where reg.id_user = usu.id
order by total desc");
        if ($query->num_rows() > 0)
            return $query->result();
    }

    function listargaleriaregistrados($id)
    {
        $this->db->select('*');
        $this->db->from("galeria_galaxy");
        $this->db->where('id_user', $id);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0)
            return $consulta->result();
    }

}