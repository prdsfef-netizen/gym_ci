<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class clogout extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('mLogin');
  }

}
