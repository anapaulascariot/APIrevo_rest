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

		$existe = $this->Modelo_registro->checarExistencia($email);

		if($existe > 0) {
			echo json_encode("Ya existe un usuario registrado con este email.");
		} else {
			$registrado = $this->Modelo_registro->guardarUsuario($arreglo);
			// this - el modelo que tengo - el método del modelo
			if(!$registrado) {
				$this->load->view('login');
			} else {
				echo json_encode("Tuvimos un problema al registrar usuario. Intentalo nuevamente, por favor.");
			}

		}
	}


	public function signin_validation()  
    {  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|is_unique[usuario.email]');  
  
        $this->form_validation->set_rules('password', 'Password', 'required|trim');  
  
        $this->form_validation->set_rules('cpassword', 'Confirme su Password', 'required|trim|matches[password]');  
  
        $this->form_validation->set_message('is_unique', 'El usuario ya existe');  
  
    if ($this->form_validation->run())  
        {  
            echo "Bienvenido. Ha ingresado con éxito";  
         }   
            else {  
              
            $this->load->view('login');  
        }  

    }
	// $id, $nombre, $apellido, $email, $contrasena


}
