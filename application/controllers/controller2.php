<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller2 extends CI_Controller {

	public function RegisterMember(){
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$v= $this->form_validation;

		$v->set_rules('username', 'Username', 'required');
		$v->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

		if ($v->run() == FALSE)
		{
			//$this->load->view('myform');
			//echo "fail";
			$data =array('status' => 'success' , 'message' => 'Insert Success');

		}
		else
		{	
			//echo "success";
			$data =array('status' => 'failed' , 'message' => $v->error_array());			

			//$this->load->view('formsuccess');
		}

		echo $v->error_array();
		return $data;
	}
	
	public function LoginMember(){
		
		$this->load->model('Model_users');

		$username = $this->Model_users->getUsers();


		echo $username;
        //$data['query'] = $this->model1->get();
        
        //$this->load->view('model1', $data);

		$username= $_POST['username'];
		$password = $_POST['password'];





		$_SESSION['Username'] = $username; 
		
		echo $username;
		echo $password;
	}

	public function check_if_mail_exists($requested_email){

		$this->load->model('Model_users');

		$email_not_in_use = $this->Model_users->check_if_mail_exists($requested_email);	

		if($email_not_in_use){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function check_if_username_exists($requested_username){

		$this->load->model('Model_users');

		$username_available = $this->Model_users->check_if_username_exists($requested_username);	

		if($username_available){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
 

}
