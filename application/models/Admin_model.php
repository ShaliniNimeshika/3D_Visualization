<?php 
class Admin_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	//filter all user details

	//data is retrive from this query  
    public function users_detail(){
    	$this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get(); 

        return $query->result();
    }

    public function search($keyword){
    	$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE('email',$keyword);
		$query = $this->db->get();

		return $query->result();
    }

    public function search_user($keyword){
    	$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE('first_name',$keyword OR 'last_name',$keyword OR 'email',$keyword);
		$query = $this->db->get();
		
		return $query->result();
    }

    public function update_db($email){
    	
    }
}