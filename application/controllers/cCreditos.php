<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class ccreditos extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mcreditos');
	}
	public function index(){
		$data  = array(
			'creditos' => $this->mcreditos->getCreditos(),
		);
		$this->load->view('admin/vPuntos',$data);
	}
}
