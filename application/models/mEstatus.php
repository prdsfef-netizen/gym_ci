<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class mstatus extends CI_Model{
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getFecha()
	{
		$lastid = $this->db->query('SELECT MAX(idasistencia) AS maxid FROM asistencia')->row()->maxid;

		$this->db->where('idasistencia', $lastid);
		$resultados = $this->db->get('asistencia');

		if ($resultados->num_rows() == 0) {
			$fecha_chk ='';
			return $fecha_chk;
		} else {
			foreach ($resultados->result()as $r) {
				$fecha_chk = $r->fecha_chk;
			}
			return $fecha_chk;
		}
		

	}
	public function getAlumnos(){
		$this->db->select('alumno.matricula,alumno.nombre,alumno.apellidop,alumno.apellidom,carrera.carrera,carrera.area,alumno.cuatrimestre'); 
		$this->db->join('carrera','alumno.idcarrera = carrera.idcarrera');
		$this->db->order_by('matricula', 'asc');
        $resultados = $this->db->get('alumno');
        
        if($resultados->num_rows() > 0){
            return $resultados->result();
        }else{
        	return 'Ni mas'
        }
	}

	public function RegistroRepetidos($matricula,$fecha_chk,$estaus)
	{
		$this->db->select('matricula,fecha_chk,estaus');
	    $this->db->where('matricula', $matricula);
	    $this->db->where('fecha_chk',$fecha_chk);
	    $this->db->where('estaus',$reg);
	    $resultados = $this->db->get('asistencia');

        if ($resultados->num_rows() >= 1 {
        	

        	foreach ($resultados ->result() as $fila) {
        		 $datos[] = $fila;
        	}
        } else {
        	return 'nel pal'
        }
        

	}

	public function agregar($matricula,$fecha_chk,$hre,$reg,$hre)
	{
	    $data = array(
	   	'matricula' => $matricula,
	   	'fecha_chk' => $fecha_chk,
	   	'horae_chk' => $hre,
	    'estatus'   => $reg,
	    'horas_chk' => $hre
	    );


	    if(!$this->db->insert('asistencia', $data)){

	    	return 'NEL '

	    } else {

	    	return 'Chido'
	    }
	}

}