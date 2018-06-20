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

	public function admin(){

        if (($_SESSION['user_logged'])== FALSE ){
            redirect("Home/load_login");
        }
        else{
            $this->load->view('admin_panel/ahome');	//need to load admin panel
        }
    }
    public function user(){

        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please loggin first to view this page!!!");
            redirect("Home/load_login");
        }
        else{
            $this->load->view('user_panel/uhome');	//need to load user panel or use profile
        }
    }

	//controlling system login
	public function login_user(){
		 $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

        if ($this->form_validation->run() == TRUE) {
            $username = $_POST['username'];
            $password = $_POST['password'];


            //check the user from the database
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where(array('email' => $username, 'password' => $password));

            $query = $this->db->get();
            $user = $query->row();
            //maintain a session for prticular user
            $_SESSION['status'] = $user->status;

            if ($user->status == "admin") {
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['fname'] = $user->firstname;
                $_SESSION['lname'] = $user->lastname;
                $_SESSION['email'] = $user->email;

                //redirect to the profile page
                redirect("Home/admin", "refresh");
            } elseif ($user->status == 'user') {
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['fname'] = $user->firstname;
                $_SESSION['lname'] = $user->lastname;
                $_SESSION['email'] = $user->email;

                //redirect to the profile page
                redirect("Home/user", "refresh");

            } else {
                // If user did not validate, then show them login page again
                $msg = '<font color=red>Please Enter your Username and Password First</font><br />';
                $data['msg'] = $msg;
                $this->load->view('login', $data);

            }

        } else {
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('login', $data);
        }
		$this->load->view('login');
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