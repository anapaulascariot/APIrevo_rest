<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Modelo_api');
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$email = $this->input->post('email');
		$contrasena = $this->input->post('contrasena');

		$arreglo = array(
			'id_usuario' => $id,
			'nombre' 	=> $nombre,
			'apellido' => $apellido,
			'email' => $email,
			'contrasena' => $contrasena
		); // nombre del campo de la base de datos y los datos que recibo por post, para despues enviar al registro en bd

		$this->Modelo_api->guardarUsuario($arreglo);
		// this - el modelo que tengo - el método del modelo
	}


	// $id, $nombre, $apellido, $email, $contrasena


}
