<?php
 if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tablaservice extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Webservice_model');
    }

    public function index(){
        switch ($this->input->server('REQUEST_METHOD')) {
            case 'GET':
                $this->datosGraficas();
                break;
            default:
                break;
        }
    }

    //obtiene los datos por post para pintar las gráficas
    public function datosGraficas(){
        if ($this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            $datos["registrodevotos"] = $this->Webservice_model->totales();
            echo json_encode($datos);
        }else{
            redirect('Login');
        }
    }


} /*cierre de controller*/
