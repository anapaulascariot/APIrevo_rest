<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Modelo_login');
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		switch ($this->input->server('REQUEST_METHOD')) {
			case 'POST':
			$this->validarLogin();
			break;
			default:
			break;
		}
	}

	public function validarLogin() {
		$email = $this->input->post('email');
		$contrasena = $this->input->post('contrasena');

		if (empty($email) or empty($contrasena)) {
			echo json_encode("Informe email y contrasena.");
			exit;	
		}

		$var = $this->Modelo_login->realizarLogin($email, $contrasena);
		// this - el modelo que tengo - el método del modelo

		if (isset($var)) {
			//$this->load->view('respuesta');
			$datosusuario = array(
				'id' => $var->id_usuario,
				'nombre' => $var->nombre,
				'apellido' => $var->apellido,
				'email' => $var->email,
				'is_logged'=> TRUE
			);

			$this->session->set_userdata($datosusuario);
			$this->session->set_flashdata('msg','Bienvenido al sistema'.$datosusuario['nombre']);
			echo json_encode(array('url' => base_url('Respuesta')));
		} else {
			echo json_encode("Usuario o contrasena invalidos.");
			//echo "<script> alert('Usuario o contraseña invalidos.'); </script>";
			//$this->load->view('login');
			$this->output->set_status_header(401);
			exit;
		}
	}

}