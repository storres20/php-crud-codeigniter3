<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function save($data){
	
	    $this->db->query("ALTER TABLE user AUTO_INCREMENT 1");
	    $this->db->insert("user", $data);
	}
	
	public function getUsers(){
		$this->db->select("*");
		$this->db->from("user");
		$results = $this->db->get();
		return $results->result();
	}
	
	public function getUser($id){
		$this->db->select("u.id, u.full_name, u.email");
		$this->db->from("user u");
		$this->db->where("u.id", $id);
		$result = $this->db->get();
		return $result->row();
	}
}
