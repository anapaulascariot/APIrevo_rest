<?php

class Modelo_respuesta extends CI_Model {

	public function guardarPregunta($id) {
		$this->db->set('voto', 'voto+1',FALSE);
		$this->db->where('idpregunta',$id);
		$this->db->update('respuesta');
		return 0;
	
    }
    //para la versión de escritorio
    public function update_respuesta()//solo toma el valor post, que es la id de la respuesta y le agrega un +1 al voto

    {

       $datos= $this->input->post('gridRadios');
        
            
            $this->db->set('voto', 'voto+1', FALSE);
            $this->db->where('idpregunta', $datos);
            return $this->db->update('respuesta'); // //UPDATE respuestas SET respuestas.voto = respuestas.voto + 1 WHERE idrespuesta = 1         
     }
}
