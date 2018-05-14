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
		$this->db->insert('mascotas',array(	'masc_id' => $data['idmascota'],
											'masc_nombre' => $data['nombre'],
											'masc_edad' => $data['edad'],
											'masc_raza' => $data['raza'],
											'masc_genero' => $data['genero'],
											'masc_color' => $data['color'],
											'masc_id_dueno' => $data['iddueno']));
	}
	
	function obtenerMascotaPorNombre($nombre,$id)
	{
		//Recibe el valor del campo indicado en el formulario de listar mascotas
		//Recibe el valor del where en la consulta(columna,valor)
		$this->db->select('*');
		$this->db->from('mascotas');
		$this->db->join('usuarios','usu_ident = masc_id_dueno');
		$this->db->where('masc_nombre',$nombre);
		$this->db->where('usu_ident',$id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
}
?>