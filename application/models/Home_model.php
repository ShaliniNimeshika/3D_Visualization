<?php 
class Home_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}
	

	public function login($data){
		$condition = "email =" . "'" . $data['uemail'] . "' AND " . "password =" . "'" . $data=['password'] . "'";
		$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
		
	}

	public function search_user($user_email){

		$condition = "email =" . "'" . $user_email . "'";
		$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}		
	}

	public function register($data){

		//Query to check whether email already exist or not
		$condition = "email ="."'".$data['email']."'";

		$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			$this->db->insert('login',$data);

			if ($this->db->affected_rows() > 0) {
				return true;
			} 			
		} else {
			return false;
		}		
	}

}