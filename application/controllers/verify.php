<?php

class Verify extends CI_Controller {

	function user($key){
		$this->load->model('membership_model');
		$user = $this->membership_model->verify_user($key);

		$type = gettype($user);

		if ($type == 'object'){//user was properly verified -- bring to home page (without being logged in)
			$data = array(
				'username' => $user->email,
				'is_logged_in' => false
			);
			$this->session->set_userdata($data);
			//redirect(base_url());
			$data['nav'] = 'home';
			$data['verified'] = true;
			$this->layout->view('home', $data);
		}
		else if ($type == 'string'){//user with this random key has already been activated -- throw some error page
			echo "ERROR --> this user has already been activated";
		}
		else if ($type == 'NULL'){//DB error -- throw some error page
			echo "DB error";
		}
	}	
}