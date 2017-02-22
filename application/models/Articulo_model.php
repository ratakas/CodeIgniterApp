<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Articulo_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	function get_articulos()
	{

		$this->db->select('*');    
		$this->db->from('articles');
		$this->db->join('users', 'articles.user_id = users.id');
		///$this->db->join('table3', 'table1.id = table3.id');
		$query = $this->db->get();
		//$query=$this->db->get('articles');
		if ($query->num_rows() >0)  {
			return $query;
		}else{
			return false;
		}	
	}


	public function articulo_edit($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->update( 'articles', $data  );

		if ($this->db->affected_rows())  {
			return "1";
		}else{
			return "2";
		}
	}

}

?>