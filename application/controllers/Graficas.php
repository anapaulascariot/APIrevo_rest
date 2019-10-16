<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graficas extends CI_Controller {

    
    public function __construct(){
        parent:: __construct();
    }
    
	public function index(){
        //$this->load->view('graficas');
		if($this->session->userdata('is_logged')){
            $datos=$this->preguntas->get_votos(); //obtiene los datos de los votos y las preguntas
             $data['datos']=$datos;
            $this->load->view('graficas', $data);
           // $this->load->view('graficas');
        }else{
            show_404();
        }
    }

}