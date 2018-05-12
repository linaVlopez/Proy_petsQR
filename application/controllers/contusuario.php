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
		$this->load->view('contusuario/usuario',$data);
	}

	function nuevo()
	{
		$this->load->view('contusuario/headers');
		$this->load->view('contusuario/formulario');	
	}

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
					 'password' => $this->input->post('password'));

		$this->contusuario_model->crearUsuario($data);
		$this->load->view('contusuario/headers');
		$this->load->view('contusuario/formulario');	
	}
}

?>