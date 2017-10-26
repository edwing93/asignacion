<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crearope extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}

	public function operario(){
		$this->load->view('asesor/crearoperario');
	}
	public function crear(){
		$cedula=$this->input->post('cedula');
		$nombres=$this->input->post('nombres');
		$estado=$this->input->post('estado');
		$ope=array('Cedula'=>$cedula,'Nombres'=>$nombres,'Estado'=>$estado);
		$this->Operarios->crear_operario($ope);
		$this->load->view('asesor/crearoperario');
	}
	public function consultar(){
		$cedula=$this->input->post('cedula');
		$datos['info']=$this->Operarios->buscar($cedula);
		$this->load->view('consulta',$datos);
	}
	public function actualizar(){
		$cedula=$this->input->post('cedula');
		$nombres=$this->input->post('nombres');
		$estado=$this->input->post('estado');
		$info=array('Nombres'=>$nombres,'Estado'=>$estado);
		$this->Operarios->actualiza($cedula,$info);
		$this->load->view('asesor/crearoperario');
	}
	public function eliminar(){
		$cedula=$this->input->post('cedula');
		$this->Operarios->elimin($cedula);
		$this->load->view('asesor/crearoperario');
	}
}
