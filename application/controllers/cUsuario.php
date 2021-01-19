<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cusuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("malumno");
        
    }

    public function index()
    {

        $data = array(
            'title' => "Sistema de control de Gimnasio",
        );
        $this->load->view('usuario/index', $data);
    }

    public function buscar()
    {
      
        $matricula = $this->input->get("matricula", true);
        $carrera  = $this->input->get("carrera", true);
        $campo     = $this->input->get("campo", true);
        if ($matricula || $carrera || $campo) {
            $alumno = $this->malumno->verificar($matricula, $carrera, $campo);
            $this->session->set_flashdata("matricula", $matricula);
            $this->session->set_flashdata("campo", $campo);
            $this->session->set_flashdata("carrera", $carrera);
        } else {
            $this->session->set_flashdata("matricula", false);
            $this->session->set_flashdata("campo", false);
            $this->session->set_flashdata("carrera", false);
            $alumno = $this->malumno->getAlumnos();
        }
        $data = array(
            'title'      => "Sistema de control de Gimnasio",
            'carrera' => $this->malumno->getCarrera(),
            'alumno'     => $alumno,
        );
        $this->load->view('usuario/resultado', $data);
    }


}
