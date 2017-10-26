<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}

	public function index() {
		if($this->session->userdata('cedula')){
			$this->load->view('Cliente/menu');
		}

		$this->load->view('login/login_view');
	}

	// INICIO FUNCIONES DE USUARIOS

	public function validar() {
		
			$username = $this->input->post('cedula');
			$password = $this->input->post('password');

			if($this->Login_terceros->login($username, $password)) {

				$this->session->set_userdata('cedula',$username);
				redirect('Op_Cliente');

			}
			else{
				$this->load->view('login/error');
			}
		}
	

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
