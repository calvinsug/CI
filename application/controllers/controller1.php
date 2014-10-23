<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller1 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->view('login');
	}
	
	public function register()
	{
		$this->load->view('register');
	}



}
