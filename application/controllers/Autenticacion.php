<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Autenticacion extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        // Load the user model
        $this->load->model('login');
    }
    
    public function login_post() {
        // Get the post data
        $email = $this->post('email');
        $password = $this->post('contrasena');
        
        // Validate the post data
        if(!empty($email) && !empty($password)){
            
            // Check if any user exists with the given credentials
            $con['returnType'] = 'single';
            $con['conditions'] = array(
                'email' => $email,
                'contrasena' => md5($password),
                'status' => 1
            );
            $user = $this->user->getRows($con);
            
            if($user){
                // Set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'Acceso correcto.',
                    'data' => $user
                ], REST_Controller::HTTP_OK);
            }else{
                // Set the response and exit
                //BAD_REQUEST (400) being the HTTP response code
                $this->response("Email o contraseña incorrectos.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            // Set the response and exit
            $this->response("Ingresa email y contraseña", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function registration_post() {
        // Get the post data
        $first_name = strip_tags($this->post('nombre'));
        $last_name = strip_tags($this->post('apellido'));
        $email = strip_tags($this->post('email'));
        $password = $this->post('contrasena');
        //$phone = strip_tags($this->post('phone'));
        
        // Validate the post data
        if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)){
            
            // Check if the given email already exists
            $con['returnType'] = 'count';
            $con['conditions'] = array(
                'email' => $email,
            );
            $userCount = $this->user->getRows($con);
            
            if($userCount > 0){
                // Set the response and exit
                $this->response("El email ya esta registrado.", REST_Controller::HTTP_BAD_REQUEST);
            }else{
                // Insert user data
                $userData = array(
                    'nombre' => $first_name,
                    'apellido' => $last_name,
                    'email' => $email,
                    'contrasena' => md5($password)
                    //'phone' => $phone
                );
                $insert = $this->user->insert($userData);
                
                // Check if the user data is inserted
                if($insert){
                    // Set the response and exit
                    $this->response([
                        'status' => TRUE,
                        'message' => 'El usuario ha sido registrado.',
                        'data' => $insert
                    ], REST_Controller::HTTP_OK);
                }else{
                    // Set the response and exit
                    $this->response("Intente de nuevo", REST_Controller::HTTP_BAD_REQUEST);
                }
            }
        }else{
            // Set the response and exit
            $this->response("Completa todos los campos", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function user_get($id = 0) {
        // Returns all the users data if the id not specified,
        // Otherwise, a single user will be returned.
        $con = $id?array('id_usuario' => $id):'';
        $users = $this->user->getRows($con);
        
        // Check if the user data exists
        if(!empty($users)){
            // Set the response and exit
            //OK (200) being the HTTP response code
            $this->response($users, REST_Controller::HTTP_OK);
        }else{
            // Set the response and exit
            //NOT_FOUND (404) being the HTTP response code
            $this->response([
                'status' => FALSE,
                'message' => 'No existe el email registrado'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function user_put() {
        $id = $this->put('id_usuario');
        
        // Get the post data
        $first_name = strip_tags($this->put('nombre'));
        $last_name = strip_tags($this->put('apellido'));
        $email = strip_tags($this->put('email'));
        $password = $this->put('contrasena'));
        //$phone = strip_tags($this->put('phone'));
        
        // Validate the post data
        if((!empty($first_name) || !empty($last_name) || !empty($email) || !empty($password))){
            // Update user's account data
            $userData = array();
            if(!empty($first_name)){
                $userData['nombre'] = $first_name;
            }
            if(!empty($last_name)){
                $userData['apellido'] = $last_name;
            }
            if(!empty($email)){
                $userData['email'] = $email;
            }
            if(!empty($password)){
                $userData['contrasena'] = md5($password);
            }
            $update = $this->user->update($userData, $id);
            
            // Check if the user data is updated
            if($update){
                // Set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user info has been updated successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                // Set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            // Set the response and exit
            $this->response("Provide at least one user info to update.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}