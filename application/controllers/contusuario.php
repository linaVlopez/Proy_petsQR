<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contusuario extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('contusuario_model');
	}

	function index()
	{
		$this->load->library('menu',array('Inicio','Contacto'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('contusuario/headers');
		$this->load->view('contusuario/formulario');
	}
/*
	function nuevo()
	{
		$this->load->view('contusuario/headers');
		$this->load->view('contusuario/formulario');	
	}
*/


	function recibirdatos()
	{
		$data = array('identificacion' => $this->input->post('identificacion'), 
					 'nombre' => $this->input->post('nombre'),
					 'apellidos' => $this->input->post('apellidos'),
					 'ciudad' => $this->input->post('ciudad'),
					 'barrio' => $this->input->post('barrio'),
					 'direccion' => $this->input->post('direccion'),
					 'telefono' => $this->input->post('telefono'),
					 'email' => $this->input->post('email'),
					 'password' => $this->input->post('password'),
					 'password2' => $this->input->post('password2'),
					 );
		
		if  ($data['password'] != $data['password2'])
		{
			$Mensaje = "Las contraseñas no son iguales";
			echo $Mensaje;
		}
		else
		{
			$this->contusuario_model->crearUsuario($data);		
			echo 'Usuario registrado <br> <meta http-equiv="Refresh" content="2;URL=http://localhost/PetsQR/index.php/contusuario" />';
		}
		//$this->load->view('contusuario/headers');
		//$this->load->view('contusuario/formulario');
		
	}
	
}

?>