<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Operaciones extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function crear_operacion($ope){
		return $this->db->insert('operaciones',$ope);
	}
	public function buscar($id){
		$this->db->from('operaciones');
		$this->db->like('Id_operacion',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function actualiza($id,$datos){
		$this->db->where('Id_operacion',$id);
		return $this->db->update('operaciones',$datos);
	}
	public function elimin($id){
		$this->db->where('Id_operacion',$id);
		return $this->db->delete('operaciones');
	}
}	
