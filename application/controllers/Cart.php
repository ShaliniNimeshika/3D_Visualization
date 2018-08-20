<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load database
		$this->load->model('Cart_model');
	}

	public function add_to_cart(){
		
	}
	
	public function retrieve_cart(){

		$this->load->model('Cart_model');
		$this->Cart_model->cart_details();
	}


	
}