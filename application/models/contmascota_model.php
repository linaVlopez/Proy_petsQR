<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContMascota_model extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function crearMascota($data)
	{
		$this->db->insert('mascotas',array('masc_id' => $data['idmascota'],'masc_nombre' => $data['nombre'],'masc_edad' => $data['edad'],'masc_raza' => $data['raza'],'masc_genero' => $data['genero'],'masc_color' => $data['color'],'masc_id_dueno' => $data['iddueno']));
	}
}
?>