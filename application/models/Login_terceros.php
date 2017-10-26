<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_terceros extends CI_Model {

	public function __construct() {

	}

	
	public function login($cedula, $clave) {
		$this->db->from('login_terceros');
		$this->db->where('Nit',$cedula);
		$this->db->where('Contrasena',$clave);
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
	public function crear_cliente($dato){
		return $this->db->insert('login_terceros',$dato);
	}
}
