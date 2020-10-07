<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("crud_model");

	}

	public function index()
	{		
		$data["users"] = $this->crud_model->index();
		$data["title"] = "Users - Crud";
		
		$this->load->view('templates\header', $data);
		$this->load->view('templates\nav-top', $data);
		$this->load->view('pages\users', $data);		
		$this->load->view('templates\footer', $data);
		$this->load->view('templates\js', $data);		
	}

	public function new()
	{
		$data["title"] = "Users - Crud";

		$this->load->view('templates\header', $data);
		$this->load->view('templates\nav-top', $data);		
		$this->load->view('pages\form-users', $data);				
		$this->load->view('templates\footer', $data);
		$this->load->view('templates\js', $data);
	}


	public function store()
	{
		$users = $_POST;	
		$this->crud_model->store($users);
		redirect("users");
	}

	
	public function edit($id)
	{		
		$data["user"] = $this->crud_model->show($id);
		$data["title"] = "Editar User - Crud";
		
		$this->load->view('templates\header', $data);
		$this->load->view('templates\nav-top', $data);
		$this->load->view('pages\form-users', $data);
		$this->load->view('templates\footer', $data);
		$this->load->view('templates\js', $data);
	}

	public function update($id)
	{		
		$user = $_POST;
		$this->crud_model->update($id, $user);
		redirect("users");
	}

	public function delete($id)
	{		
		$this->crud_model->destroy($id);
		redirect("users");
	}

}
