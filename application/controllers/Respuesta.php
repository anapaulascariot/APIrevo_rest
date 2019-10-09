<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Respuesta extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Modelo_respuesta');
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		$idpregunta = $this->input->post('id')
		$pregunta = $this->input->post('pregunta');
		$voto = $this->input->post('voto');
		// this - el modelo que tengo - el método del modelo
		$arreglo = array(
			'id_pregunta' => $idpregunta
			'pregunta' 	=> $pregunta,
			'voto' => $voto
		); /

		echo json_encode($var);
	}


	// $id, $nombre, $apellido, $email, $contrasena


}
}
