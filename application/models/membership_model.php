<?php

class Membership_model extends CI_Model{

	//validate login credentials
	function validate(){

		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1){
			return true; 
		}
	}

	//register a new user in the DB
	function create_user(){

		$this->db->where('username', $this->input->post('username'));
		$userExists = $this->db->get('users');

		//if requested username already exists in the DB, return error  message
		if ($userExists->num_rows() > 0){
			return "The username " . $this->input->post('username') . " already exists. Please try again.";
		}

		//otherwise, attempt to insert new user into DB
		else{
			$new_user = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'password' => md5($this->input->post('password'))
			);

			$query = $this->db->insert('users', $new_user);
			return $query;
		}
	}
}

?>