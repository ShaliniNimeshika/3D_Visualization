<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load database
		//$this->load->model('Home_model');
	}

	//load user panel views
	
	public function load_home(){
		//load contact page
		$this->load->view('user_panel/uhome');
	}

}