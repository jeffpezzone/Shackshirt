<?php

class Site extends CI_Controller {

	//simply loading a view
	function index(){
		//code from tutorial
		/*$this->load->model('site_model');
		$data['records'] = $this->site_model->getUsers();
		$this->load->view('home', $data);*/

		//load home page with t-shirt builder using custom bootstrap layout library
		$data['nav'] = 'home';
		$this->layout->view('home', $data);
	}

	function shack(){
		$data['nav'] = 'shack';
		$this->layout->view('shack', $data);
	}

	function design(){
		$data['nav'] = 'design';
		$this->layout->view('design', $data);
	}

	function organizations(){
		$data['nav'] = 'organizations';
		$this->layout->view('organizations', $data);
	}

	function about(){
		$data['nav'] = 'about';
		$this->layout->view('about', $data);
	}

	//load under_construction animation
	function under_construction(){
		$this->load->view('under_construction');
	}

}

?>