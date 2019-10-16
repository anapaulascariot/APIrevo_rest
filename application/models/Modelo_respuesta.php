<?php

class Modelo_respuesta extends CI_Model {

	public function guardarPregunta($id) {
		$this->db->set('voto', 'voto+1',FALSE);
		$this->db->where('idpregunta',$id);
		$this->db->update('respuesta');
		return 0;
	
    }
}
