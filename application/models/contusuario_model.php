<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContUsuario_model extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function crearUsuario($data)
	{
		$this->db->insert('usuarios',array('usu_ident' => $data['identificacion'],'usu_nombre' => $data['nombre'],'usu_apellido' => $data['apellidos'],'usu_ciudad' => $data['ciudad'],'usu_barrio' => $data['barrio'],'usu_direccion' => $data['direccion'],'usu_telefono' => $data['telefono'],'usu_email' => $data['email'],'usu_pass' => $data['password']));
	}
}
?>