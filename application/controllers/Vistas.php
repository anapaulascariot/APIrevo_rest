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

			//validaciones view
	public function signin_validation()  
	{  
		$this->load->library('form_validation');  

		$this->form_validation->set_rules(
			'email', 'Email', 'required|is_unique[usuario.email]',
			array(
				'required'      => 'No proporcionaste un correo válido',
				'is_unique'     => 'Ya existe un usuario registrado con este email.'
			)
		);  

		$this->form_validation->set_rules('contrasena', 'contrasena', 'required|min_length[5]|max_length[12]',
			array(
				'required'      => 'No proporcionaste una contraseña válida',
				'min_length'      => 'La contraseña debe ser de mínimo 5 caracteres',
				'max_length'      => 'La contraseña debe ser de máximo 12 caracteres'
			)
		);  

		$this->form_validation->set_rules('confirmar_contrasena', 'Confirme su Password', 'required|matches[contrasena]');  

	      //  $this->form_validation->set_message('is_unique', 'El usuario ya existe');  

		if ($this->form_validation->run())  
		{  
			$this->index();  
			echo "<script> alert('Registro realizado. Por favor, realize login para votar.'); </script>";
			$this->load->view('login'); 
		}   
		else {  
	           //echo "Error"; 
	           // echo validation_errors();
			$this->load->view('registro'); 
		}  
	}

}
