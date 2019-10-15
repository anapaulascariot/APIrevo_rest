<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votacionservice extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Webservice_model');
    }//fin constructor
    
    public function index(){
        switch ($this->input->server('REQUEST_METHOD')) {
            case 'POST':
                $this->guardaVotacion();
                break;
            default:
                break;
        }
    }


    //manda el voto del usuario
    public function guardaVotacion(){
        header("Content-Type:application/json");
        header('Access-Control-Allow-Origin: *');

         //$id_usuario = $this->session->userdata("id");
         $valor = $this->input->post("valor_de_voto");
         $id_usuario = $this->input->post("id");

         $datos = array(
           'id_usuario_voto' =>  $id_usuario, 
           'valor' =>  $valor
         );

         $existe = 0;//$this->Webservice_model->checarsivoto($id_usuario);
         if($existe > 0){
            $data['estatus']     = 'ERROR';
            $data['mensaje']     = 'Ya has votado anteriormente';
         }else{
             $data['estatus']     = 'OK';
             $data['mensaje']     = 'Voto registrado correctamente';
             $dato = $this->Webservice_model->guardaVoto($datos);
             if ($dato) {
                    echo json_encode(["pasa" => true]);
                }else{
                    echo json_encode(["pasa" => false]);
                }
         }
        //echo json_encode($data);
    }

    
}
?>