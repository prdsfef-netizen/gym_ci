<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class malumno extends CI_Model {

    public function getCarrera() {
        $this->db->order_by('carrera', 'asc');
        $resultados = $this->db->get('carrera');
        
        if($resultados->num_rows() > 0){
            return $resultados->result();
        }
    }

	public function save($data){
		return $this->db->insert("alumno",$data);
	}
	public function getAlumnosad(){
		$this->db->select('alumno.matricula,alumno.nombre,alumno.apellidop,alumno.apellidom,alumno.genero,carrera.carrera,carrera.area,alumno.cuatrimestre,alumno.grado'); 
		$this->db->join('carrera','alumno.idcarrera = carrera.idcarrera');
		$this->db->order_by('matricula', 'asc');
        $resultados = $this->db->get('alumno');
        
        if($resultados->num_rows() > 0){
            return $resultados->result();
        }
	}
		public function getAlumnos(){
		$this->db->select('alumno.matricula,alumno.nombre,alumno.apellidop,alumno.apellidom,carrera.carrera,carrera.area,alumno.cuatrimestre,asistencia.fecha_chk,horae_chk,horas_chk'); 
		$this->db->join('carrera','alumno.idcarrera = carrera.idcarrera');
        $this->db->join('asistencia', 'alumno.matricula = asistencia.matricula');
		$this->db->order_by('matricula', 'asc');
        $resultados = $this->db->get('alumno');
        
        if($resultados->num_rows() > 0){
            return $resultados->result();
        }
	}
	public function getAlumnosa(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cAlumno");
		return $resultados->result();
	}
    public function verificar($matricula, $idcarrera, $campo)
    {
        $this->db->select("l.*,f.area,a.*,f.carrera as carrera");
        $this->db->join("carrera f", "f.idcarrera = l.idcarrera");
        $this->db->join("asistencia a", "l.matricula = a.matricula");
        if ($idcarrera !== "") {
            $this->db->where("l.idcarrera", $idcarrera);
        }
       
        if ($campo == 1) {
            $this->db->like('l.nombre', $matricula);
        }
        else{
            $this->db->where('l.matricula', $matricula);
        }
         
         
        
        

        $resultados = $this->db->get('alumno l');
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }


}
