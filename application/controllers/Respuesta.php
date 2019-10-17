<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*---------------controlador del modelo respuesta-----*/
class Respuesta extends CI_Controller {

  public $respuestas;

  public function __construct() {
    parent::__construct();
    $this->load->model('Modelo_respuesta');
  }

  public function index() {
   switch ($this->input->server('REQUEST_METHOD')) {
    case 'POST':
    $this->votar();
    break;
    default:
    break;
  }

}

public function votar() {

  header("Content-Type:application/json");
  header('Access-Control-Allow-Origin: *');
    //Ana: para que sirve eso?

  $voto = $this->input->post('voto');
  $idusuario = $this->input->post('id_usuario');

  if (empty($voto) or empty($idusuario)) {
    echo json_encode("Es necesario informar el usuario y voto para proseguir.");
    exit;
  }

  if ($voto < 0 or $voto > 4) {
    echo json_encode("Voto no permitido.");
    exit;
  }

  $existeVotoAnterior = $this->Modelo_respuesta->checarVotoExistente($idusuario);
  if ($existeVotoAnterior > 0) {
    echo json_encode("Solo es posible votar una vez.");
    exit;
  } else {
    $object = array(
      //'id_respuesta' => 1,
      'id_usuario' => $idusuario,
      'voto' => $voto);

    $retorno_bd = $this->Modelo_respuesta->guardarVoto($object);
    if ($retorno_bd) {
      echo json_encode("Voto realizado con exito.");
    } else {
      echo json_encode("No fue posible contabilizar su voto.");
    }
  }

}    

/*public function respuesta()  
{  
      //Generalmente recibiría una id como argumento para mostrar la pregunta
      //como se ha descartado, la id se maneja en una variable interna
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
    redirect('Main/invalid');  
  }  

} 


public function votar()
     //Recibiría una id pero, la id realmente no hace nada aquí excepto para mostrar la gráfica al final

{

        //$this->form_validation->set_rules('gridRadios', 'required');
        /*
        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

            redirect(base_url('index.php/Main/formulario/'.$id));

        }else{ }//Validación, dentro del else se pone la ejecución si pasa la validación
        
        $this->respuestas->update_respuesta();

        redirect(base_url('index.php/Vistas/graficas/'));

        

      }*/

	// public function respuest(){
	// 	$this->load->model('Modelo_respuesta');
	// 	// poner aqui, porque sino todas las funciones individuales tienen que llamar el modelo
	// }

    }

