<?php

class Modelo_registro extends CI_Model {

	public function guardarUsuario($objeto) {
		$this->db->insert('usuario', $objeto);
		return 0;
	}

	function checarExistencia($email){
    	$this->db->select('nombre,apellido,email,contrasena');
    	$this->db->where('email', $email); 
    	$this->db->from('usuario');
    	return $this->db->count_all_results();
    }

}
