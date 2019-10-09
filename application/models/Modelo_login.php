<?php

class Modelo_login extends CI_Model {

	public function realizarLogin($email, $contrasena) {
		
		$this->db->select('*');
		$this->db->from('usuario');	
		$this->db->where('email', $email);	
		$this->db->where('contrasena', md5($contrasena));

		return $this->db->get()->row();

	}

}
