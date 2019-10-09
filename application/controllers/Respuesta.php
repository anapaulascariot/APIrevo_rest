<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Respuesta extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Modelo_respuesta');
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		$idpregunta = $this->input->post('id');
		$var = $this->Modelo_respuesta->guardarPregunta($idpregunta);
		echo json_encode($var);
	}

}
