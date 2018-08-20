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

    public function update_db($email,$data){
    	$sql = "UPDATE user SET first_name=".$firstname." last_name=".$lastname." telephone=".$telephone." WHERE email=".$email;

    }

    /*
		STOCK MANAGEMENT
    */

	public function search_category($catname){
		$this->db->SELECT('*');
		$this->db->FROM('category');
		$this->db->WHERE('catname',$catname);
		$query = $this->db->get();
		
		return $query->result();
	}

	public function add_category($detail){
		$this->db->insert('category', $detail);
	}

	public function load_category(){
		$this->db->SELECT('*');
		$this->db->FROM('category');
		$query = $this->db->get();
		
		return $query->result();
	}

	//get category id
	public function get_catid($catname){
		$this->db->SELECT('catid');
		$this->db->FROM('category');
		$this->db->WHERE('catname',$catname);
		$query = $this->db->get();

		return $query->result();
	}

	//insert new item
	public function insert_item($data){
		$this->db->insert('item',$data);
	}

	//find the availability of an item
	public function find_item($catid,$itemname){
		$condition = "catid =" . "'" . $catid . "' AND " . "itemname =" . "'" . $itemname . "'";
		$this->db->SELECT('*');
		$this->db->FROM('item');
		$this->db->WHERE($condition);
		$query = $this->db->get();

		return $query->result();
	}
}