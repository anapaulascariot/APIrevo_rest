<?php

class Modelo_graficas extends CI_Model{
	function votosTotales(){
	    $this->db->select('valor nombre, count(*) valor');
	    $this->db->from('msicu_votos');
	    $this->db->group_by('valor');
	    return $this->db->get()->result();
	}
}