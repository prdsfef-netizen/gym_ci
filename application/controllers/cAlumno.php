<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class calumno extends CI_Controller

{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('malumno');
		
	}
	public function index(){
		$data['carrera'] = $this->malumno->getCarrera();
		$this->load->view('admin/vAlumno', $data);
		

	}
	 public function guardar ()
	{   $matricula = $this->input->post("matricula");
		$nombre = $this->input->post("nombre");
		$apellidop = $this->input->post("apellidop");
		$apellidom = $this->input->post("apellidom");
		$genero = $this->input->post("genero");
		$idcarerra = $this->input->post('idcarrera');
		$cuatrimestre = $this->input->post("cuatrimestre");
		$grado = $this->input->post("grado");

		$data  = array(
			'matricula' => $matricula, 
			'nombre' => $nombre, 
			'apellidop' => $apellidop,
			'apellidom' => $apellidom,
			'genero' =>$genero,
			'idcarrera' => $idcarerra, 
			'cuatrimestre' => $cuatrimestre,
			'grado' => $grado
			
		);

		if ($this->malumno->save($data)) {
			redirect(base_url()."calumno");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."Admin/vAlumno");
		}

	}
	public function most(){
		$data  = array(
			'calumno' => $this->malumno->getAlumnos($matricula), 
		);
		$this->load->view("Admin/vAdmin",$data);
	
	}

}