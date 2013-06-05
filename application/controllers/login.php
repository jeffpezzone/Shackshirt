<?php

class Login extends CI_Controller {

	//Login authorization
	function validate_credentials(){
		//load form validation library
		$this->load->library('form_validation');

		//set rules for login form
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() ==  FALSE){ //user didn't conform to rules above -- display validation errors
			$result = array(
				'success' => FALSE,
				'message' => validation_errors()
			);
			header('Content-Type: application/json',true);
			echo json_encode($result);
		}
		else{ //user complied to all validation rules -- now, attempt to login
			$this->load->model('membership_model');
			$query = $this->membership_model->validate();

			if ($query){ //login successful -- create session
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);

				//redirect back to home
				//redirect('index.php');
			}
			else{ //login failed
	        			$result = array(
	        				'success' => FALSE,
	        				'message' => 'Invalid username and password combination. Please try again'
	        			);
	        			//enable passing of JSON data
	        			header('Content-Type: application/json',true);
	        			echo json_encode($result);
			}
		}
	}

	//Register a new user
	function create_user(){
		//load form validation library
		$this->load->library('form_validation');

		//set rules for register form
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() ==  FALSE){ //user didn't conform to rules above -- display validation errors
			$result = array(
				'success' => FALSE,
				'message' => validation_errors()
			);
			header('Content-Type: application/json',true);
			echo json_encode($result);
		}	
		else{ //user complied to all validation rules -- now, attempt to create user and store in DB
			$this->load->model('membership_model');
			$query = $this->membership_model->create_user();
			$type = gettype($query);

			//if return value is boolean, either insertion successful or DB error
			if ($type == "boolean"){
				if ($query){ //insertion successful -- create session (log in)
					$data = array(
						'username' => $this->input->post('username'),
						'is_logged_in' => true
					);
					$this->session->set_userdata($data);

					//redirect back to home
					//redirect('index.php');
				}
				else{ //DB error
					$result = array(
						'success' => FALSE,
						'message' => 'Something went wrong. Please try again'
					);	
					header('Content-Type: application/json',true);
					echo json_encode($result);
				}
			}

			//if return value is string, the requested username already exists in the DB -- display error
			else if ($type == "string"){
				$result = array(
					'success' => FALSE,
					'message' => $query
				);	
				header('Content-Type: application/json',true);
				echo json_encode($result);
			}
		}
	}

	//Logout
	function logout(){
		$this->session->sess_destroy();
		redirect('index.php');
	}	

}

?>