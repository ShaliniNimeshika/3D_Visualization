<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start(); //we need to start session in order to access it through CI

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//load from helper library
		$this->load->helper('form');

		//load form validation library
		$this->load->library('form_validation');

		//load session library
		$this->load->library('session');

		//load database
		$this->load->model('Home_model');
	}
	
	public function index()
	{
		$this->load->view('home.php');
	}

	//load views
	public function load_login(){
		$msg = '<font color=green>Enter your username and password here to sign in.</font><br />';
        $data['msg'] = $msg;
        $this->load->view('login', $data);
	}

	public function load_signup(){
		$msg = '<font color=green>Create an account</font><br />';
        $data['msg'] = $msg;
        $this->load->view('signup', $data);
	}

	public function load_accessories(){
		$this->load->view('accessories_collection');
	}

	public function load_categories(){
		$this->load->view('categories');
	}

	public function load_contact(){
		$this->load->view('contact');
	}

	public function load_men_col(){
		$this->load->view('gents_collection');
	}
	public function load_women_col(){
		$this->load->view('women_collection');
	}
	public function load_single(){
		$this->load->view('single');
	}

	public function load_week_deal(){
		$this->load->view('week_deal');
	}

	//controlling system login
	public function login_user(){
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[5]|xss_clean');

		if ($this->form_validation->run() == TRUE) {
			
		} else {
			if (isset($this->session->userdata['logged_in'])) {
				$this->load->view('admin_home');
			} else {
				$this->load->view('login');
			}
		}
	}
}