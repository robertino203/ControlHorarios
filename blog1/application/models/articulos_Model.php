<?php

class Articulos_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	//Genera un listado de articulos.
	function lista_articulos()
	{
		
		$consulta = $this->db->get('articulos');//obtiene todos los articulos de la tabla articulos!
		return $consulta->result();//si es array_result, se utiliza []
	}
	
	function detalle_articulos($id_articulo)
	{
		$this->db->where('id_articulos',$id_articulo);
		$consulta = $this->db->get('articulos');
		return $consulta->row();
	}
	
}
	
?>