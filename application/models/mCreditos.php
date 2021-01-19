<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mcreditos extends CI_Model {

  public function getCreditos(){
        $this->db->select('alumno.matricula,alumno.nombre,alumno.apellidop,alumno.apellidom,creditos.cantidad'); 
        $this->db->join('alumno','alumno.matricula = creditos.matricula');
        $this->db->order_by('matricula', 'asc');
        $resultados = $this->db->get('creditos');
        
        if($resultados->num_rows() > 0){
            return $resultados->result();
        }
     }



}
