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
		$this->load->view('home1.php');  //load the home page
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

public function d_load(){
		
		//load contact page
		$this->load->view('Dress');
	}

// public function dd_load(){
		
// 		//load contact page
// 		$this->load->view('3dWorld');
// 	}



	
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
            $this->load->view('home');	//need to load admin panel
        }
    }
    public function user(){

        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please log in first to view this page!!!");
            redirect("Home/load_login");
        }
        else{
            $this->load->view('home');	//need to load user panel or use profile
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
            $user = $query->result();

            //session_start();
            //maintain a session for prticular user
            if (count($user) <= 0) {
	            $msg = '<font color=red>Invalid username and/or password.</font><br />';
	            $data['msg'] = $msg;
	            $this->load->view('login', $data);
            } else {
            	$_SESSION['status'] = $user[0]->status;
	            if ($_SESSION['status'] == 'admin') {
	                //maintain a session to user status already logged in or not
	                $_SESSION['user_logged'] = TRUE;
	                $_SESSION['fname'] = $user[0]->first_name;
	                $_SESSION['lname'] = $user[0]->last_name;
	                $_SESSION['email'] = $user[0]->email;
	                //redirect to the profile page
	                //redirect("Home/admin", "refresh");

	                if (($_SESSION['user_logged'])== FALSE ){
			            redirect("Home/load_login");
			        }
			        else{
			        	$data['username'] = $_SESSION['fname'];
			            $this->load->view('admin_panel', $data);	//need to load admin panel
			        }

	            } elseif ($_SESSION['status'] == 'user') {
	                //maintain a session to user status already logged in or not
	                $_SESSION['user_logged'] = TRUE;
	                $_SESSION['fname'] = $user[0]->first_name;
	                $_SESSION['lname'] = $user[0]->last_name;
	                $_SESSION['email'] = $user[0]->email;
	                //redirect to the profile page
	                //redirect("Home/user", "refresh", $username);

	                if (($_SESSION['user_logged'])== FALSE ){
			            $this->session->set_flashdata("error","Please log in first to view this page!!!");
			            redirect("Home/load_login");
			        }
			        else{
			        	$data['username'] = $_SESSION['fname'];
			            $this->load->view('home',$data);	//need to load user panel or use profile
			        }
	            } else {
	                // If user did not validate, then show them login page again
	                $msg = '<font color=red>Invalid username and/or password.</font><br />';
	                $data['msg'] = $msg;
	                $this->load->view('login', $data);
	            }
            }
            
        } else {
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('login', $data);
        }
		//$this->load->view('login');
	}

	//logout from the system
	public function logout(){
		$this->load->view('home1');
	}


	/*
		Controller functions for reset password
	*/

	//reset password form with password and re-password
	public function reset_pwd(){
		$this->load->view('resetpwd');
	}

	//load view for enter mail address to send reset password link
	public function reset_add(){
		$this->load->view('reset_add');
	}

	//sending email to the user mail to reset password and through this function send link to resetpwd.php view
	public function send_email(){
		$from_email = "no-reply@inoac.com";
        $to_email = $this->input->post('email');
        $data['link'] = base_url().'Home/reset_pwd';
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Reset Password');
        $this->email->message("No need to worry, you can reset your password by clicking the link below: \n",$link,"\nIf you didn't request a password reset, feel free to delete this email! \nAll the best, \nThe Spotify Team");
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('contact_email_form');
	}

	//after entering reset password email, the successful msg is shown here
	public function check_mail(){
		$this->load->view('checkmail');
	}

	//new user registration
	public function user_registration(){

		//echo("hello world");
		//set validation for user registration
		$this->form_validation->set_rules('fname','fname','trim|required|xss_clean');
		$this->form_validation->set_rules('lname','lname','trim|required|xss_clean');
		$this->form_validation->set_rules('telephone','telephone','trim|required|xss_clean|min_length[10]');
		$this->form_validation->set_rules('email','email','trim|required|xss_clean|min_length[100]');
		$this->form_validation->set_rules('password','password','trim|required|xss_clean|min_length[5]');
		$this->form_validation->set_rules('repassword','repassword','trim|required|xss_clean|min_length[5]');


		if ($this->form_validation->run() == FALSE) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $error = '';
            
            //check whether user is registered or not
            $this->db->SELECT('*');
			$this->db->FROM('user');
			$this->db->WHERE('email','$email');
			$query = $this->db->get();
			$value = $query->num_rows();

			if ($value > 0) {
				$msg = '<font color=green>Already Registered. Please sign in using email address and password.</font><br />';
	            $data['msg'] = $msg;
	            $this->load->view('login', $data);
            	
            } else {
            	if ($password == $repassword) {
	                $_SESSION['firstname'] = $fname;
	                $_SESSION['lastname'] = $lname;
	                $_SESSION['email'] = $email;
	                $_SESSION['telephone'] = $telephone;

	                $data = array(
	                    'first_name' => $fname,
	                    'last_name' => $lname,
	                    'email' => $email,
	                    'telephone' => $telephone,
	                    'password' => $password,
	                    'status' => 'user'
	                );

	                $this->load->model('Home_model');
	                $this->Home_model->register($data);
	                $data['username'] = $_SESSION['firstname'];
	//Loading View
	                $this->load->view('home',$data);
	            } else {
	                $msg = '<font color=red>Password Different.Try Again</font><br />';
	                $data['msg'] = $msg;
	                $this->load->view('signup', $data);
	            }
            }
            
                
            
        } else {
            $msg = '<font color=red>Invalid email and/or name.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('signup', $data);
        }
		
	}
}