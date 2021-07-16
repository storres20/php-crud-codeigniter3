<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct() // esta funcion cargar antes que el INDEX
        {
            parent::__construct();
            $this->load->model("User_model");
        }

	public function index($id)
	{
		$data = $this->User_model->getUser($id);
		$this->load->view('user/edit', $data);
		/* print_r($data); */
		/* echo $id; */
	}
	
	public function update($id)
	{
		$fullName = $this->input->post("fullName");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassword = $this->input->post("repeatPassword");
		
		$data = $this->User_model->getUser($id);
		
		$validateEmail = "";
		
		if ($email != $data->email) {
			# code...
			$validateEmail = "|is_unique[user.email]";
		}
		
		$this->form_validation->set_rules('fullName', 'Nombre completo', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo electronico', 'required|valid_email'.$validateEmail);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('repeatPassword', 'Confirma contraseña', 'required|matches[password]');

		
		if ($this->form_validation->run() == FALSE)
        {
            /* echo form_error('fullName'); */
            /* $this->load->view('user/edit', $data); */
            $this->index($id);
        }
        else
        {
            // los campos del array pertenecen a la Base de Datos
			$data = array(
				"full_name" => $fullName,
				"email" => $email,
				"password" => md5($password),
				"modified_at" => date("Y-m-d h:m:s")
			);
			
			$this->User_model->update($data, $id);
			$this->session->set_flashdata('success', 'Los datos se actualizaron correctamente');
			redirect(base_url()."usuarios",'refresh');
            
        }
		
		
	}
}
