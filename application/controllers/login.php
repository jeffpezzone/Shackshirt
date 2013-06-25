<?php

class Login extends CI_Controller {

	//Login authorization
	function validate_credentials(){
		//load form validation library
		$this->load->library('form_validation');

		//set rules for login form
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		//user didn't conform to rules above -- display validation errors
		if ($this->form_validation->run() ==  FALSE){ 
			$result = array(
				'success' => FALSE,
				'message' => validation_errors()
			);
			header('Content-Type: application/json',true);
			echo json_encode($result);
		}
		//user complied to all validation rules -- now, attempt to login
		else{ 
			$this->load->model('membership_model');
			$query = $this->membership_model->validate();
			$type = gettype($query);

			if ($type == 'boolean'){
				if ($query == true){ //login successful -- create session
					$data = array(
						'username' => $this->input->post('email'),
						'is_logged_in' => TRUE
					);
					$this->session->set_userdata($data);
					$result = array(
						'success' => TRUE,
						'redirect' => base_url()
					);
					//enable passing of JSON data
		        			header('Content-Type: application/json',true);
		        			//pass JSON array to client side AJAX
		        			echo json_encode($result);
		        		}
				else{ //login failed
		        			$result = array(
		        				'success' => FALSE,
		        				'message' => 'Invalid email and password combination. Please try again.'
		        			);
		        			//enable passing of JSON data
		        			header('Content-Type: application/json',true);
		        			//pass JSON array to client side AJAX
		        			echo json_encode($result);
		        		}
		        	}
		        	else if ($type == 'string'){ //account locked
		        		$result = array(
	        				'success' => FALSE,
	        				'message' => 'Your account is inactive. Please verify your account by clicking the activation link that has been sent to your email.'
	        			);
	        			//enable passing of JSON data
	        			header('Content-Type: application/json',true);
	        			//pass JSON array to client side AJAX
	        			echo json_encode($result);
		        	}
		}
	}

	//Register a new user
	function create_user(){
		//load form validation library
		$this->load->library('form_validation');

		//set rules for register form
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		//user didn't conform to rules above -- display validation errors
		if ($this->form_validation->run() ==  FALSE){ 
			$result = array(
				'success' => FALSE,
				'message' => validation_errors()
			);
			header('Content-Type: application/json',true);
			echo json_encode($result);
		}
		//user complied to all validation rules -- now, attempt to create user and store in DB	
		else{ 
			$randKey = $this->rand_md5(32); //generate random key for email verification
			$this->load->model('membership_model');
			$query = $this->membership_model->create_user($randKey);
			$type = gettype($query);

			//if return value is boolean, either insertion successful or DB error
			if ($type == "boolean"){
				//send registration email here??
				if ($query){ //insertion successful --send verification email

					$this->load->library('email');
					$this->email->set_newline("\r\n");

					$this->email->from('jpezzone22@gmail.com', 'Shackshirt');
					$this->email->to($this->input->post('email'));
					$this->email->subject('Shackshirt Registration');
					$this->email->message('Thank you for registering! Please click <a href="'
								. base_url() . 'verify/user/' . $randKey . '">here</a> to verify your account.
								<br><br>-The Shackshirt Staff');

					if ($this->email->send()){
						$result = array(
							'success' => TRUE
						);
						header('Content-Type: application/json',true);
						echo json_encode($result);
					}
					else{
						$result = array(
							'success' => FALSE,
							'message' => 'There was an error in sending the email.'
						);
						header('Content-Type: application/json',true);
						echo json_encode($result);
					}
				}
				else{ //DB error
					$result = array(
						'success' => FALSE,
						'message' => 'Whoops! There was a database error. Please try again'
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
		redirect(base_url());
	}	

	//generate random string using md5
	function rand_md5($length) {
		 $max = ceil($length / 32);
		 $random = '';
		 for ($i = 0; $i < $max; $i ++) {
		   $random .= md5(microtime(true).mt_rand(10000,90000));
		 }
		 return substr($random, 0, $length);
	}
}

?>