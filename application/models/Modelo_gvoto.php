<?php

class Modelo_Gvoto extends CI_Model{


    function guardaVoto($datos){
    	$this->db->insert('msicu_votos', $datos);
    	return $this->db->insert_id();
    }

    /*function totales(){
        $this->db->select('valor nombre, count(*) valor');
        $this->db->from('msicu_votos');
        $this->db->group_by('valor');
        return $this->db->get()->result();
    }*/

}