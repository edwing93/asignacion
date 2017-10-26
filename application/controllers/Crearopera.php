<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crearopera extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}

	public function operacion(){
		$this->load->view('asesor/crearoperacion');
	}
	public function crear(){
		$id=$this->input->post('id');
		$descripcion=$this->input->post('descripcion');
		$tiempo=$this->input->post('tiempo');
		$valor=$this->input->post('valor');
		$ope=array('Id_operacion'=>$id,'Descripcion'=>$descripcion,'Tiempo'=>$tiempo,'Valor_operacion'=>$valor);
		$this->Operaciones->crear_operacion($ope);
		$this->load->view('asesor/crearoperacion');
	}
	public function consultar(){
		$id=$this->input->post('id');
		$datos['info']=$this->Operaciones->buscar($id);
		$this->load->view('consultaoperaciones',$datos);
	}
	public function actualizar(){
		$id=$this->input->post('id');
		$descripcion=$this->input->post('descripcion');
		$tiempo=$this->input->post('tiempo');
		$valor=$this->input->post('valor');
		$info=array('Descripcion'=>$descripcion,'Tiempo'=>$tiempo,'Valor_operacion'=>$valor);
		$this->Operaciones->actualiza($id,$info);
		$this->load->view('asesor/crearoperacion');
	}
	public function eliminar(){
		$id=$this->input->post('id');
		$this->Operaciones->elimin($id);
		$this->load->view('asesor/crearoperacion');
	}
}
