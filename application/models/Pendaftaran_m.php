<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran_m extends CI_Model {

  public function view(){
    $query = $this->db->get('pendaftaran');
    return $query->result_array();
  }

  public function tambah($data) {
     return $this->db->insert('Pendaftaran', $data);
  }

  public function valemail($id = FALSE) {
	   $query = $this->db->get_where('pendaftaran', array('email_jobseeker' => $id));
	   return $query->row_array();
	}

  public function valnim($id = FALSE) {
	   $query = $this->db->get_where('pendaftaran', array('nim' => $id));
	   return $query->row_array();
	}

  public function detail($id = FALSE) {
  	if ($id === FALSE) {
    	$query = $this->db->get('pendaftaran');
    	return $query->result_array();
  	}
  	$query = $this->db->get_where('pendaftaran', array('id_jobseeker' => $id));
  	return $query->row_array();
	}

  public function edit($data) {
   	$this->db->where('nim', $data['nim']);
   	return $this->db->update('pendaftaran', $data);
 	}

  public function delete($id){
    $this->db->where('id_jobseeker', $id);
    $this->db->delete('pendaftaran');
  }

}
