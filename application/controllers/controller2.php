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
		
		$username= $_POST['username'];
		$password = $_POST['password'];
		
		echo $username;
		echo $password;

	}

}
