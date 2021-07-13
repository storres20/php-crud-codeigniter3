<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct() // esta funcion cargar antes que el INDEX
        {
            parent::__construct();
            $this->load->model("User_model");
        }

	public function index()
	{
		$this->load->view('user/add');
	}
	
	public function save()
	{
		$fullName = $this->input->post("fullName");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassword = $this->input->post("repeatPassword");
		
		// los campos del array pertenecen a la Base de Datos
		$data = array(
			"full_name" => $fullName,
			"email" => $email,
			"password" => md5($password)
		);
		
		$this->User_model->save($data);
	}
}
