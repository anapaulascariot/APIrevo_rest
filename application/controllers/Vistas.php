<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**-------controlador de vistas----**/
class Vistas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
		$this->load->view('login');
	}

	public function respuesta() {
		  $id=3;
          if ($this->session->userdata('currently_logged_in'))   
        {
            $respuestas = $this->preguntas->find_respuesta($id);
           // $lapregunta = $this->preguntas->get_pregunta($id);
            //$preguntayrespuesta=$this->acomoda_pregunta($lapregunta,$respuestas);
            $datos['respuesta']=$respuestas;
            //$this->load->view('navbar/head');
            $this->load->view('respuesta',$datos);  
        } else {  
            redirect('Vistas/index');  
        } 
		//respuesta
	}

	public function registro_usuario() {

		$this->load->view('registro');
	}

	public function graficas() {
	$graficas;
	$this->load->model('Modelo_graficas');
    $this->graficas = new Modelo_graficas;
		$datos=$this->graficas->get_votos(); //obtiene los datos de los votos y las preguntas
        $data['datos']=$datos;
        $this->load->view('graficas', $data);
	}

}
