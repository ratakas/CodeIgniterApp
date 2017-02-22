<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
		//$this->load->helper('ayuda');
	}
	public function index()
	{
		//$this->load->view('Usuario/Usuario_consultar.php');

		$data['usuarios']=$this->Usuario_model->get_usuarios();

		$data['title']="Usuarios";
		$this->load->view('main/head_inicio.php',$data); //**
		$this->load->view('main/head_fin.php'); 

		$this->load->view('main/menu.php');
		$this->load->view('Usuario/Usuario_consultar.php',$data);

		$this->load->view('main/body_inicio.php');//**
		$this->load->view('main/body_fin.php');


	}

	public function consultar()
	{
		$data['usuarios']=$this->Usuario_model->get_usuarios();

		$data['title']="Usuarios";
		$this->load->view('main/head_inicio.php',$data); //**
		$this->load->view('main/head_fin.php'); 

		$this->load->view('main/menu.php');
		$this->load->view('usuario/Usuario_consultar.php',$data);

		$this->load->view('main/body_inicio.php');//**
		$this->load->view('usuario/body_fin.php');
	}



	public function crearusuario()
	{
		$data = array(
			'name' => $this->input->post('nombre'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'type' => $this->input->post('tipo')
			);

		$this->Usuario_model->add_usuario($data);
		redirect('usuarios/consultar', 'refresh');

	}










	/* eliminar genereal*/
	function eliminardatabd()
	{
		if ($this->input->post('eli_id')) {
			$data = array('eli_id' =>$this->input->post('eli_id'),
				'eli_tabla' =>$this->input->post('eli_tabla'),
				'eli_col' =>$this->input->post('eli_col')
				);
			$elism= $this->Usuario_model->eliminardatabd($data);
			if ($elism=="1") {
				echo("<script>alert('Eliminado Con Exxito!!');window.location = '".base_url().$this->input->post('eli_dir')."';</script>");
				
			}else{
				echo("<script>alert('!!Error Al Eliminar');window.location = '".base_url()."';</script>");
			}
		}
	}

}
?>