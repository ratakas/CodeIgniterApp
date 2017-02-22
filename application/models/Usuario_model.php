<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	function get_usuarios()
	{
		$query=$this->db->get('users');
		if ($query->num_rows() >0)  {
			return $query;
		}else{
			return false;
		}	
	}
	function add_usuario($data)
	{
		$this->db->insert( 'users', array( 'name' => $data['name'] ,'email' => $data['email'] ,'password' => $data['password'] ,'type' => $data['type']   )  );
	}






	/* eliminar general*/
	function eliminardatabd($data)
	{
		$this->db->where($data['eli_col'], $data['eli_id']);
		$this->db->delete($data['eli_tabla']);
		
		if ($this->db->affected_rows())  {
			return "1";
		}else{
			return "2";
		}
	}

	
}
?>