<?php

class Modelo_registro extends CI_Model {

	public function guardarUsuario($objeto) {
		$this->db->insert('usuario', $objeto);
		return 0;
	}

}
