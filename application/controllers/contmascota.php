<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contmascota extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('contmascota_model');
	}

	function index()
	{		
		$this->load->view('contmascota/headers');
		$this->load->view('contmascota/formulario');
	}

	/*
	function nuevo()
	{
		$this->load->view('contmascota/headers');
		$this->load->view('contmascota/formulario');	
	}
	*/

	function recibirdatos()
	{
		$data = array('idmascota' => $this->input->post('idmascota'), 
					 'nombre' => $this->input->post('nombre'),
					 'edad' => $this->input->post('edad'),
					 'raza' => $this->input->post('raza'),
					 'genero' => $this->input->post('genero'),
					 'color' => $this->input->post('color'),
					 'iddueno' => $this->input->post('iddueno'));

		$this->contmascota_model->crearMascota($data);
		echo 'Mascota registrado <br> <meta http-equiv="Refresh" content="2;URL=http://localhost/PetsQR/index.php/contmascota" />';
		//$this->load->view('contmascota/headers');
		//$this->load->view('contmascota/formulario');	
	}
}

?>