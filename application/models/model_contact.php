<?php
class model_contact extends CI_Model{

	function insertUserdata(){

		$data=array(
			'Name'=> $this->input->post('name',TRUE),
			'Email'=> $this->input->post('email',TRUE),
			'Message'=> $this->input->post('message',TRUE)
		);

		return $this->db->insert('contact',$data);

	}
}