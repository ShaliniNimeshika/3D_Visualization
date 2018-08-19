<?php
class contact extends CI_Controller {

	public function contactuser(){
		$this->form_validation->set_rules('name','Name','required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('msg','Try again');
			$this->load->view('contact');
		}
		else{
			$this->load->model('model_contact');
			$response=$this->model_contact->insertUserdata();
	
			if ($response){
				$this->session->set_flashdata('msg','Thank you very much! We received your message');
				$this->load->view('contact');

			} 
			


		}

			 
		

	}
	

}