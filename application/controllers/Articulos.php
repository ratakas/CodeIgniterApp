<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->load->model('Articulo_model');
		//$this->load->helper('ayuda');
	}
	public function index()
	{
		$data['articulos']=$this->Articulo_model->get_articulos();

		$data['title']="Articulos";
		$this->load->view('main/head_inicio.php',$data); //**
		$this->load->view('main/head_fin.php'); 

		$this->load->view('main/menu.php');
		$this->load->view('articulo/articulos.php',$data);

		$this->load->view('main/body_inicio.php');//**
		$this->load->view('articulo/body_fin.php');
	}


	public function articulo_edit()
	{
		$data = array(
			'id' => '2',
			'title' => 'Noticia ulrima 22',
			'content' => 'sdadsadasddsadsadasd'
			);
		$data['articulos']=$this->Articulo_model->articulo_edit($data);
		redirect('Articulos', 'refresh');

		
	}

}

?>