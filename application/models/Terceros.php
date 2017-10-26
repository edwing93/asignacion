<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Terceros extends CI_Model {

	public function __construct() {

	}

	
	public function login($cedula, $clave) {
		$this->db->from('Terceros');
		$this->db->where('nit',$cedula);
		$this->db->where('contrasena',$clave);
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
	public function crear_cliente($dato){
		return $this->db->insert('terceros',$dato);
	}
}
