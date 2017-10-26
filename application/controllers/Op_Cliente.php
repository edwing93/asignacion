<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Op_Cliente extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}

	public function index() {
		$this->load->model('Terceros');
		$this->load->view('cliente/menu');
	}

	public function registrar() {

		$this->load->view('cliente/registrar');
	}
	// INICIO FUNCIONES DE USUARIOS
	
	public function validar(){
			
			$nit = $this->input->post('nit');
			$nombres = $this->input->post('nombres');
			$razon_social = $this->input->post('razon_social');
			$fecha_nacimiento = $this->input->post('fecha_nacimiento');
			$direccion = $this->input->post('direccion');
			$telefono1=$this->input->post('Telefono1');
			$telefono2=$this->input->post('telefono2');
			$correo=$this->input->post('correo');
			$autoriza_datoss=$this->input->post('autoriza_datos');
			$pass = $this->input->post('contrasena');
			$dat= array(
		'Nit'=>$nit,
		'Nombres'=>$nombres,
		'Razon_social'=>$razon_social,
		'Fecha_nacimiento'=>$fecha_nacimiento,
		'Direccion'=>$direccion,
		'Telefono1'=>$telefono1,
		'Telefono2'=>$telefono2,
		'Correo'=>$correo,
		'Autoriza_datos'=>$autoriza_datoss
			);
			
			$login_terceros= array(
		'Nit'=>$nit,
		'Contrasena'=>$pass,
			'Terceros_Nit'=>$nit);
			
			
			$this->Terceros->crear_cliente($dat);
			$this->Login_terceros->crear_cliente($login_terceros);
			redirect('login');
	}
	
	
	
	public function agendar_view(){
		$this->load->view('cliente/agendar');
	}
	
	
}
