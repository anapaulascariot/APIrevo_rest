<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vistas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		$this->load->view('login');
	}

	public function respuesta() {
		$this->load->view('respuesta');
	}


}
