<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load model
		$this->load->model('Admin_model');
	}
	

	/*
		USER MANAGEMENT
	*/
	public function load_customers(){
		//load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('Admin_model');  
        //load the method of model  
        $query =$this->Admin_model->users_detail();  

        $data['users'] = null;
		if($query){
			$data['users'] =  $query;
		}
		$this->load->view('customers',$data);
	}

	public function load_dashboard(){
		//load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('Admin_model');  
        //load the method of model  
        $query =$this->Admin_model->users_detail();  

        $data['users'] = null;
		if($query){
			$data['users'] =  $query;
		}
		$this->load->view("admin_panel",$data);
	}

	public function search_user(){
		$keyword = $_POST['keyword'];
		//load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('Admin_model');  
        //load the method of model  
        $query =$this->Admin_model->search($keyword);  

        $data['users'] = null;
		if($query){
			$data['users'] =  $query;
		}else{
			$msg = '<font color=green>No Result Found!</font><br />';
	        $data['msg'] = $msg;
		}

		$this->load->view("customers",$data);
	}

	public function load_newreg(){
		$msg = '<font color=black>Register new users by Admin.</font><br />';
	    $data['msg'] = $msg;
		$this->load->view('newreg',$data);
	}

	public function load_updateuser(){
		$msg = '<font color=black>Update user details by Admin.</font><br />';
	    $data['msg'] = $msg;
		$this->load->view('update_user',$data);
	}

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
	            $this->load->view('newreg', $data);
            	
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
	                $data['msg'] = '<font color=green>Registered Successfully!</font><br />';
	//Loading View
	                $this->load->view('newreg',$data);
	            } else {
	                $msg = '<font color=red>Password Different.Try Again</font><br />';
	                $data['msg'] = $msg;
	                $this->load->view('newreg', $data);
	            }
            }         
                            
        } else {
            $msg = '<font color=red>Invalid email and/or name.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('newreg', $data);
        }
		
	}

	public function user_search(){
		$keyword = $_POST['keyword'];
		//load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('Admin_model');  
        //load the method of model  
        $query =$this->Admin_model->search_user($keyword);  

		if($query){
			$data['users'] =  $query;
			$this->load->view("update_user",$data);
		}else{
			$msg = '<font color=green>No Result Found!</font><br />';
	        $data['msg'] = $msg;
	        $this->load->view("update_user",$data);
		}
	}

	public function set_update(){

	}

	public function user_update(){
		$this->form_validation->set_rules('fname','fname','trim|required|xss_clean');
		$this->form_validation->set_rules('lname','lname','trim|required|xss_clean');
		$this->form_validation->set_rules('telephone','telephone','trim|required|xss_clean|min_length[10]');

		if ($this->form_validation->run()==TRUE) {
			$fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $telephone = $_POST['telephone'];

            $data = array(
	                    'first_name' => $fname,
	                    'last_name' => $lname,
	                    'email' => $email,
	                    'telephone' => $telephone,
	                );

            $this->load->model('Admin_model');
            $this->Admin_model->update_db($email,$data);
            $data['msg'] = '<font color=green>Update Successfully!</font><br />';
//Loading View
            $this->load->view('update_user',$data);
		} else {
			# code...
		}
		
	}


	/*
		STOCK MANAGEMENT
	*/

	public function load_searchstock(){
		$this->load->view('search_stock');
	}

	public function load_additem(){
		$this->load->view('add_item');
	}

	public function load_updateitem(){
		$this->load->view('update_item');
	}
}