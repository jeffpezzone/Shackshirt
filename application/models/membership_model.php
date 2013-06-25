<?php

class Membership_model extends CI_Model{

	//validate login credentials
	function validate(){

		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1){ //passed authentication
			$row = $query->row();
			//if user tries to login before activating account do not allow login
			if ($row->active == 0){
				return "Inactive account";
			}
			return true;
		}
		else{ //failed authentication
			return false;
		}
	}

	//register a new user in the DB
	function create_user($randKey){

		$this->db->where('email', $this->input->post('email'));
		$userExists = $this->db->get('users');

		//if requested username (email) already exists in the DB, return error  message
		if ($userExists->num_rows() > 0){
			return "The email address " . $this->input->post('email') . " is already in use. Please try again.";
		}

		//otherwise, attempt to insert new user into DB
		else{
			$new_user = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'randKey' => $randKey,
				'active' => 0
			);

			$query = $this->db->insert('users', $new_user);
			return $query;
		}
	}

	function verify_user($randKey){

		//first, check if $randKey already exists in DB
		$this->db->where('randKey', $randKey);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0){
			//make sure that record with random key is not already active (variant of session stealing)
			$this->db->where('randKey', $randKey);
			$this->db->where('active', 1);
			$check = $this->db->get('users');
			if ($check->num_rows() > 0){
				return "ERROR! User has already been activated.";
			}
			else{
				//activate user
				$update = $this->db->query('UPDATE users SET active = ' . 1 . ' WHERE randKey = "' . $randKey . '"');
				return $query->row(); //return user info
			}
		}
		else{
			return NULL;
		}
	}
}

?>