<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contgeneracionqr extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('contmascota_model');		
		$this->load->helper("url");
		$this->config->base_url="http://localhost/qr_code";
	}

	function index()
	{		
		$this->load->view('contmascota/headers');
		$this->load->view('contmascota/codigoQR');
	}

	function generarcodigoQR()
	{
		$nombre =$this->input->post('nombre');
		$iddueno =$this->input->post('iddueno');
		$datamascota = $this->contmascota_model->obtenerMascotaPorNombre($nombre,$iddueno);			

		if($datamascota){
			foreach ($datamascota->result() as $row) {			
					$character = "Nombre mascosta:";
					$character .= $row->masc_nombre;
					$character .= "\n";					
					$character .= "Nombre propietario:";
					$character .= $row->usu_nombre;
					$character .= "\n";
					$character .=  "Ciudad:";
					$character .= $row->usu_ciudad;
					$character .= "\n";
					$character .=  "Barrio:";
					$character .= $row->usu_barrio;
					$character .= "\n";
					$character .=  "Direccion:";
					$character .= $row->usu_direccion;
					$character .= "\n";
					$character .=  "Telefono:";
					$character .= $row->usu_telefono;
					$character .= "\n";
					$character .=  "Email:";
					$character .= $row->usu_email;							
			}	

			$this->load->library('ciqrcode');		
			$params['data']=$character;			
			$params['level']='H';
			$params['size']=5;
			$params['savename']=FCPATH.'qr_code/qrcode.png';
			$this->ciqrcode->generate($params);
			echo '<img src="'.base_url().'qr_code/qrcode.png"/>';	
		}
		else
		{
			echo 'No existen datos para generar';
		}
		
	}
	
}