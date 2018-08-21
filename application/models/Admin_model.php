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

    public function deleteCustomer($email){
    	return $this->db->delete('user',['email'=>$email]);
    }

    public function search_user($keyword){

    	$query = $this->db->query("select * from user where first_name ='$keyword' OR last_name = '$keyword' OR email = '$keyword'");	
		return $query->result();
    }

    public function update_db($data){
    	$email = $data['email'];
    	
    	$update_data = array(
    						'first_name' => $data['first_name'],
					    	'last_name' => $data['last_name'],
					    	'email' => $data['email'],
					    	'telephone' => $data['telephone']
    	);
    	
    	return $this->db->where('email',$email)->update('user',$update_data);
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
		// $this->db->SELECT('*');
		// $this->db->FROM('category');
		// $query = $this->db->get();
		
		// return $query->result();

		$result = $this->db->select('catid, catname')->get('category')->result_array(); 
 
        $category = array(); 
        foreach($result as $r) { 
            $category[$r['catid']] = $r['catname']; 
        } 
        $category[''] = 'Select Category...'; 
        return $category; 
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
	public function find_item($data){
		$catid = $data['catid'];
        $itemname = $data['itemname'];

        $query = $this->db->query("select * from item where catid = '$catid' and itemname = '$itemname'");	
		// return $query->result();
		// $condition = "catid =" . "'" . $data->catid . "' AND " . "itemname =" . "'" . $data->itemname . "'";
		// $this->db->SELECT('*');
		// $this->db->FROM('item');
		// $this->db->WHERE($condition);
		// $query = $this->db->get();


		return $query->result();
	}

	public function load_update($email){
		$condition = "email =" . "'" . $email ."'";
		$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE($condition);
		$query = $this->db->get();

		return $query->result();
	}

	public function load_stock(){
		$this->db->select('*');
        $this->db->from('item');
        $query = $this->db->get(); 

        return $query->result();
	}

}