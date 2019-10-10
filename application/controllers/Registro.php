<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Modelo_registro');
		// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	}

	public function index() {
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

		$this->Modelo_registro->guardarUsuario($arreglo);
		// this - el modelo que tengo - el método del modelo
	}

	public function signin_validation()  
    {  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean|is_unique[usuario.nombre]');  
  
        $this->form_validation->set_rules('password', 'Password', 'required|trim');  
  
        $this->form_validation->set_rules('cpassword', 'Confirme su Password', 'required|trim|matches[password]');  
  
        $this->form_validation->set_message('is_unique', 'El usuario ya existe');  
  
    if ($this->form_validation->run())  
        {  
            echo "Bienvenido. Ha ingresado con éxito";  
         }   
            else {  
              
            $this->load->view('signin');  
        }  
    }


	// $id, $nombre, $apellido, $email, $contrasena


}
