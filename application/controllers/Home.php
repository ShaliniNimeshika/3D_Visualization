<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load database
		$this->load->model('Home_model');
	}
	
	public function index()
	{
		$this->load->view('home.php');  //load the home page
	}

	//load views
	public function load_login(){

		//a message display in the login page
		$msg = '<font color=green>Enter your username and password here to sign in.</font><br />';
        $data['msg'] = $msg;
        $this->load->view('login', $data);
	}

	public function load_signup(){

		//a message display in signup page
		$msg = '<font color=green>Create an account</font><br />';
        $data['msg'] = $msg;
        $this->load->view('signup', $data);
	}

	public function load_accessories(){
		//load accessories page
		$this->load->view('accessories_collection');
	}

	public function load_categories(){
		//load all categories
		$this->load->view('categories');
	}

	public function load_contact(){
		//load contact page
		$this->load->view('contact');
	}

	public function load_men_col(){
		//load gents collection page
		$this->load->view('gents_collection');
	}
	public function load_women_col(){
		//load ladies collection page
		$this->load->view('women_collection');
	}
	public function load_single(){
		//loading items as single units
		$this->load->view('single');
	}

	public function load_week_deal(){
		//load week deal
		$this->load->view('week_deal');
	}

	//controlling system login
	public function login_user(){

		//validate the user input
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[5]|xss_clean');

		if ($this->form_validation->run() == TRUE) {
			//get he user input as array elements
			$data = array('uemail' => $this->input->post('username'),
						  'password' => $this->input->post('password')
					);

			$result = $this->Home_model->login($data);
			if ($result == TRUE) {
				//get the user email from form and get the result from db through model
				$user_email = $this->input->post('username');
				$result = $this->Home_model->search_user($user_email);
				if ($result != false) {
					$session_data = array('username' => $result[0]->fname,
										  'uemail' => $result[0]->email,
									);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('home'); //add admin pnl
				}
			} else {
				//if there is any error occureed
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('login', $data);
			}
			

		} else {
			//if the form validation is false
			if (isset($this->session->userdata['logged_in'])) {
				//if the userdata got from session load the admin home
				$this->load->view('home'); // >> setup home -> admin panel home
			} else {
				//otherwise redirect to the login page again
				$this->load->view('login');
			}
		}
	}

	//logout from the system
	public function logout(){
		// Removing session data
		$session_array = array('username' => '');

		$this->session->unset_userdata('logged_in', $session_array);

		$data['message_display'] = 'Successfully Logout';

		$this->load->view('login', $data);
	}

	//new user registration
	public function user_registration(){
		//set validation for user registration

		$this->form_validation->set_rules('fname','fname','trim|required|xss_clean');
		$this->form_validation->set_rules('lname','lname','trim|required|xss_clean');
		$this->form_validation->set_rules('nic','nic','trim|required|xss_clean|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('telephone','telephone','trim|required|xss_clean|min_length[10]');
		$this->form_validation->set_rules('email','email','trim|required|xss_clean|min_length[100]');
		$this->form_validation->set_rules('password','password','trim|required|xss_clean|min_length[50]');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'fname' => $this->input->post('fname'), 
				'lname' => $this->input->post('lname'),
				'nic' => $this->input->post('nic'),
				'telephone' => $this->input->post('telephone'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);

			$result = $this->Home_model->register($data);

			if ($result == TRUE) {
				$data['message'] = 'Registered Successfully !';
				$this->load->view('login',$data);
			} else {
				$data['message'] = 'Email already exist !';
				$this->load->view('signup',$data);
			}
			
		} else {
			$this->load->view('signup');
		}
		
	}
}