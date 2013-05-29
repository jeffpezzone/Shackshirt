<?php

class Site extends CI_Controller {

	//simply loading a view
	function index(){
		//code from tutorial
		/*$this->load->model('site_model');
		$data['records'] = $this->site_model->getUsers();
		$this->load->view('home', $data);*/

		//load home page with t-shirt builder using custom bootstrap layout library
		$this->layout->view('home');
	}

	function under_construction(){
		$this->load->view('under_construction');
	}

	public function doSomething(){
		echo "doing something";
	}

}