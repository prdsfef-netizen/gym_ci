<?php  
 /**
  * 
  */
 defined('BASEPATH') OR exit('No direct script access allowed');
  class combobox_model extends CI_Model {
    function getcarrera() {
        $data = array();
        $query = $this->db->get('carrera');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }
}