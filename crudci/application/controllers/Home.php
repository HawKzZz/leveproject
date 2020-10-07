<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("crud_model");
		$data["users"] = $this->crud_model->index();
		$data["cursos"] = $this->crud_model->index1();
		$data["title"] = "Home - Crud";
		
		$this->load->view('templates\header', $data);
		$this->load->view('templates\nav-top', $data);
		$this->load->view('pages\home', $data);
		$this->load->view('templates\footer', $data);
		$this->load->view('templates\js', $data);		
	}

}
