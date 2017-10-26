<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Operarios extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function crear_operario($ope){
		return $this->db->insert('operarios',$ope);
	}
	public function buscar($ced){
		$this->db->from('operarios');
		$this->db->like('Cedula',$ced);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function actualiza($cedula,$datos){
		$this->db->where('Cedula',$cedula);
		return $this->db->update('operarios',$datos);
	}
	public function elimin($dato){
		$this->db->where('Cedula',$dato);
		return $this->db->delete('operarios');
	}
}	
