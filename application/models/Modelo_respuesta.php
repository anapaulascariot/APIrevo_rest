<?php

class Modelo_respuesta extends CI_Model {

	/*public function guardarPregunta($id) {
		$this->db->set('voto', 'voto+1',FALSE);
		$this->db->where('idpregunta',$id);
		$this->db->update('respuesta');
		return 0;
	}*/

	function verificarvoto($id){
    	$this->db->select('*');
    	$this->db->where('id_usuario_voto', $id); 
    	$this->db->from('msicu_votos');
    	return $this->db->count_all_results();
    }

    function guardaVoto($datos){
    	$this->db->insert('msicu_votos', $datos);
    	return $this->db->insert_id();
    }

}
