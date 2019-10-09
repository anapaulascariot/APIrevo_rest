<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Modelo_login');
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		$email = $this->input->post('email');
		$contrasena = $this->input->post('contrasena');

		$var = $this->Modelo_login->realizarLogin($email, $contrasena);
		// this - el modelo que tengo - el método del modelo

		//echo json_encode($var);
		if ($var) {
			redirect('Vistas/respuesta');
		} else {
			echo "Usuario o contrasena invalidos.";
		}
	}


	// $id, $nombre, $apellido, $email, $contrasena


}
