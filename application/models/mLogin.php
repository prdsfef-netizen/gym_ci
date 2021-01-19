<?php  
 /**
  * 
  */
 defined('BASEPATH') OR exit('No direct script access allowed');
  class mlogin extends CI_Model
  {
    
  public function ingresar($user,$pass){

$this->db->select('id_admin, usuario, contrasena'); 
$this->db->from('admin');
$this->db->where('usuario',$user); 
$this->db->where('contrasena',$pass);

$consulta = $this->db->get();

if($consulta->num_rows()==1 ){ 
  $c = $consulta->row();

  $session=array(
'sessionidA'=> $c->id_admin,
'sessionA'=> $c->usuario

  );
  $this->session->set_userdata($session);

return 1;
}else{
  return 0;

}
  }
  } 