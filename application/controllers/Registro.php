	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Registro extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('Modelo_registro');
			// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
		}

		public function index() {
			switch ($this->input->server('REQUEST_METHOD')) {
				case 'POST':
				$this->registrarUsuario();
				break;
				default:
				break;
			}

		}

		public function registrarUsuario() {

			//$id = $this->input->post('id');
			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$email = $this->input->post('email');
			$contrasena = $this->input->post('contrasena');

			$arreglo = array(
				//'id_usuario' => $id,
				'nombre' 	=> $nombre,
				'apellido' => $apellido,
				'email' => $email,
				'contrasena' => md5($contrasena)
			); // nombre del campo de la base de datos y los datos que recibo por post, para despues enviar al registro en bd

			if (empty($nombre) or empty($apellido) or empty($email) or empty($contrasena)) {
				echo json_encode("Informe nombre, apellido, email y contrasena.");
				exit;	
			}

			//validaciones API
			$existe = $this->Modelo_registro->checarExistencia($email);

			if($existe > 0) {
				$this->output->set_status_header(401);
				echo json_encode("Ya existe un usuario registrado con este email.");
				exit;
			} else {

				$registrado = $this->Modelo_registro->guardarUsuario($arreglo);

				// this - el modelo que tengo - el método del modelo
				if(!$registrado) {
					echo json_encode("Usuario registrado con exito.");
					//$this->load->view('login');
				} else {
					echo json_encode("Tuvimos un problema al registrar usuario. Intentalo nuevamente, por favor.");
				}
			}
		}
	}
