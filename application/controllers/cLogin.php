<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class clogin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('mLogin');
	}

	public function index(){

		$data['msje']="";
		if ($this->session->userdata("login")) {
            redirect(base_url() . "Admin/vAdmin");
        } else {
            $this->load->view('Admin/vLogin',$data);
        }
    

	}

	public function ingresar (){

		$user = $this->input->post('txtNickName');
 	  $pass = md5($this->input->post('txtPass'));
    $res = $this->mLogin->ingresar($user,$pass);

		if($res==1){

			$this->load->view('Admin/vAdmin');
	  }else{

		$data['msje']="No coinciden los datos vuelve a intentar";
	  $this->load->view('Admin/vLogin',$data);

  }


 }

}
