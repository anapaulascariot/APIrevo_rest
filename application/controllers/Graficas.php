<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graficas extends CI_Controller {

    
    public function __construct(){
        parent:: __construct();
    }
    
	public function index(){
        $this->load->view('Modelo_graficas');
		//*if($this->session->userdata('is_logged')){
            /*$this->load->view('graficas');
        }else{
            show_404();
        }*/
    }

}