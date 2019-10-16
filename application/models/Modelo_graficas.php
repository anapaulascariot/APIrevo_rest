<?php

class Modelo_graficas extends CI_Model{
	function votosTotales(){
	    $this->db->select('valor nombre, count(*) valor');
	    $this->db->from('msicu_votos');
	    $this->db->group_by('valor');
	    return $this->db->get()->result();
	}

	 public function get_votos()

      {

      //$this->db->select('SELECT * from pregunta_respuesta where idpregunta='.$id, FALSE);
      
        //$query=$this->db->get_where('pregunta_respuesta', array('idpregunta' => $id))->row();

      $this->db->select('pregunta, voto');
      //$this->db->from('pregunta_respuesta');
      //$this->db->where('idpregunta='.$id);  
      $query= $this->db->get("respuesta"); 
        return $query->result();
      }
}