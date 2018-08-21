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

	//search user by given keyword
	public function search_user(){
		$keyword = $_POST['keyword'];
		//load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('Admin_model');  
        //load the method of model  
        $query =$this->Admin_model->search_user($keyword);  

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
		$msg = '<font color=black></font><br />';
	    $data['msg'] = $msg;
	    $data['users'] = null;
		$this->load->view('newreg',$data);
	}

	// public function load_updateuser($user){
	// 	$msg = '<font color=black>Update user details by Admin.</font><br />';
	// 	$email = $user->email;

	// 	$this->load->database();
	// 	$this->load->model("Admin_model");
	// 	$query = $this->Admin_model->load_update($email);

	//     $data['users'] = null;
	//     if ($query) {
	//     	$data['users'] = $query;
	//     }
	    
	// 	$this->load->view('update_user',$data);
	// }

	//new user registration by admin
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

	//search user by email
	public function user_search(){
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
			$data['msg'] = '<font color=red>Danger! Once you click Delete you cannot undo the activity! </font><br />';
			
		}else{
			$msg = '<font color=green>No Result Found!</font><br />';
	        $data['msg'] = $msg;
	        $data['users'] =  null;
	       
		}

		$this->load->view("newreg",$data);
	}

	//delete user
	public function delete_user(){
		$email = $_POST['email'];
		$this->load->model('Admin_model');
		if($this->Admin_model->deleteCustomer($email)){
			$data['msg'] = 'Customer Delete Successfully...'; 
			$data['users'] = null;
		}
		else{
			$data['msg'] = 'Failed to Delete Customer...';
			$data['users'] = null;
		}
		$this->load->view("newreg",$data);
	}

	// public function set_update(){
	// 	$email = $_POST['email'];
	// 	$this->load->model('Admin_model');
	// 	$query = $this->Admin_model->set_textfield($email);

	// 	$data['user'] = null;

	// 	if ($query) {
	// 		$data['user'] = $query;
	// 	}

	// 	$this->load->view('update_user',$data);
	// }

	// update user details
	public function user_update(){
		$this->form_validation->set_rules('fname','fname','trim|required|xss_clean');
		$this->form_validation->set_rules('lname','lname','trim|required|xss_clean');
		$this->form_validation->set_rules('email','email','trim|required|xss_clean');
		$this->form_validation->set_rules('telephone','telephone','trim|required|xss_clean|min_length[10]');

		if ($this->form_validation->run()==FALSE) {
			$fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];

            $data = array(
	                    'first_name' => $fname,
	                    'last_name' => $lname,
	                    'email' => $email,
	                    'telephone' => $telephone,
	                );

            $this->load->model('Admin_model');
            $this->Admin_model->update_db($data);
            $data['msg'] = '<font color=green>Update Successfully!</font><br />';
            $data['users'] = null;
            $this->load->view('newreg',$data);
		} else {
			$data['msg'] = '<font color=green>Failed to update user!</font><br />';
            $data['users'] = null;
            $this->load->view('newreg',$data);
		}
		
	}


	/*
		STOCK MANAGEMENT
	*/

	//load search_stock.php
	public function load_searchstock(){
		$this->load->database();
		$this->load->model('Admin_model');
		$query = $this->Admin_model->load_stock();

		$data['product'] = null;
		if ($query) {
			$data['product'] = $query;
		}
		$this->load->view('search_stock',$data);
	}

	//load add_item.php
	public function load_additem(){
		$msg = '<font color=black>Add new categories and items by Admin.</font><br />';
		// $data['msg'] = $msg;

		$this->load->database();
		$this->load->model('Admin_model');
		$load_cat = $this->Admin_model->load_category();
		$data = array('msg' => $msg, 'category' => $load_cat);

		$this->load->view('add_item',$data);
	}

	//load update_item.php
	public function load_updateitem(){
		$msg = '<font color=black>This fields for updating item details</font><br />';
		$data['msg'] = $msg;
		$this->load->view('update_item',$data);
	}

	// Add Category
	public function add_category(){
		
		$catname = $_POST['catname'];

		if (! is_null($catname)) {
			$this->load->database();  
	        //load the model  
	        $this->load->model('Admin_model');  
	        //load the method of model  
	        $query =$this->Admin_model->search_category($catname);  

	        $data['msg'] = null;
			if($query){
				$data['msg'] =  $query;
			}

			if (count($query) > 0) {
				$msg = '<font color=red>Category already registered!</font><br />';
				$data['msg'] = $msg;
				$this->load->view('add_item', $data);
			} else {
				$detail = array(
                    'catname' => $catname,
                    'status' => 'active'
                );  
		        $this->load->model('Admin_model');   
		        $query =$this->Admin_model->add_category($detail); 
				$msg = '<font color=green>Category registered Successfully!</font><br />';
				$data['msg'] = $msg;
				$this->load->view('add_item', $data);
			}		
	         //return the data in view  
	        
		} else {
			$msg = '<font color=red>Something went wrong!</font><br />';
			$data['msg'] = $msg;
			$this->load->view('add_item', $data);
		} 
	}

	//add new item
	public function new_item(){

		$this->form_validation->set_rules('category', 'category', 'required');
        $this->form_validation->set_rules('itemname', 'itemname', 'trim|required|xss_clean|min_length[4]');
        $this->form_validation->set_rules('avbqty', 'avbqty', 'trim|required|xss_clean|min_length[4]');
        $this->form_validation->set_rules('itemprice', 'itemprice', 'trim|required|xss_clean|min_length[4]');
        $this->form_validation->set_rules('color', 'color', 'trim|required|xss_clean|min_length[2]');

        if ($this->form_validation->run() == FALSE) {
        	$catname = $_POST['category'];
			$itemname = $_POST['itemname'];
			$avbqty = $_POST['avbqty'];
			$itemprice = $_POST['itemprice'];
			$color = $_POST['color'];

			$this->load->model('Admin_model');
			$catid = $this->Admin_model->get_catid($catname);

			$find = array('catid' => $catid, 'itemname' => $itemname );

			$item_found = $this->Admin_model->find_item($find);

			if (count($item_found) > 0) {
				$msg = '<font color=red>Item is already inserted!</font><br />';
				$this->load->database();
				$this->load->model('Admin_model');
				$load_cat = $this->Admin_model->load_category();
				$data = array('msg' => $msg, 'category' => $load_cat);

				$this->load->view('add_item',$data);
			} else {
				$data = array('catid' => $catid,
					'itemname' => $itemname,
					'avbqty' => $avbqty,
					'itemprice' => $itemprice,
					'color' => $color );

				$this->load->model('Admin_model');
				$this->Admin_model->insert_item($data);

				$msg = '<font color=green>Insert New Item Successfully!</font><br />';
				$this->load->database();
				$this->load->model('Admin_model');
				$load_cat = $this->Admin_model->load_category();
				$data = array('msg' => $msg, 'category' => $load_cat);

				$this->load->view('add_item',$data);
			}
			
        }else{
        	$msg = '<font color=red>Something went wrong!</font><br />';
			$this->load->database();
			$this->load->model('Admin_model');
			$load_cat = $this->Admin_model->load_category();
			$data = array('msg' => $msg, 'category' => $load_cat);

			$this->load->view('add_item',$data);
        }
	}
}