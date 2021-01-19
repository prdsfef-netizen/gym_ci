<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class calumnos extends CI_Controller

{

	function __construct()
	{
		parent::__construct();
		$this->load->model('malumno');


	}
	public function index(){

		$data  = array(
			'alumno' => $this->malumno->getAlumnosad(),
		);

		$this->load->view('admin/vAlumnos',$data);

	}



}
