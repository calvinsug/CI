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

	public function about()
	{
		$this->load->view('about');
	}

	public function about2()
	{
		$this->load->view('about2');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function prayerrequest()
	{
		$this->load->view('prayerrequest');
	}

	public function adoptstreet()
	{
		$this->load->view('adoptstreet');
	}

	public function homeadmin()
	{
		$this->load->view('homeadmin');
	}


}
