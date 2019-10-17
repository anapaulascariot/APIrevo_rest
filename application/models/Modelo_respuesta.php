<?php

class Modelo_respuesta extends CI_Model {

	public function guardarVoto($object) {

        $this->db->insert('respuesta', $object);
        return $this->db->insert_id();

    }
    //para la versión de escritorio
    /*public function update_respuesta()//solo toma el valor post, que es la id de la respuesta y le agrega un +1 al voto

    {

       $datos= $this->input->post('gridRadios');
        
            $this->db->set('voto', 'voto+1', FALSE);
            $this->db->where('idpregunta', $datos);
            return $this->db->update('respuesta'); // //UPDATE respuestas SET respuestas.voto = respuestas.voto + 1 WHERE idrespuesta = 1         
        }*/

        public function checarVotoExistente($idusuario) {
            $this->db->select('*');
            $this->db->where('id_usuario', $idusuario); 
            $this->db->from('respuesta');

            return $this->db->count_all_results();
        }

    }
