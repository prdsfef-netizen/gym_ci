<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class casistencia extends CI_Controller

{

	function __construct()
	{
		parent::__construct();
		$this->load->model('masistencia');


	}
	public function index(){

	 $now = date('Y-m-d');
	 $fecha_chk = $this->masistencia->getFecha();


	if (data($now) < date($fecha_chk)) {
		
       return 'nel'

	} else {
		
		$this->load->view('Usuario/formulio');
	}
	

	}

	public function agregarHora()
	{
		$matricula = $this->input->post('matricula');
	    $hre       = $this->input->post('horae_chk');
	    $fecha = $this->input->post('fecha_chk');

	      list($day, $mes, $year) = explode("-", $fecha);
	    $fecha_chk = $year. "-".$mes."-".$day;          
	    $fech =date('Y-m-d');
	   


	}



}
