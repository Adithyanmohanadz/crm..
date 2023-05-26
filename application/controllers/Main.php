<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('login/login');
	}

	public function dashboard()
	{
		$this->load->view('include/header');
		$this->load->view('dashboard');
		$this->load->view('include/footer');
		
	}

	public function profile()
	{
		$this->load->view('include/header');
		$this->load->view('profile');
		$this->load->view('include/footer');
	}

	public function privilege_type()
	{
		$this->load->view('include/header');
		$this->load->view('privilege/privilege_type');
		$this->load->view('include/footer');
	}
	
	public function privilege_group()
	{
		$this->load->view('include/header');
		$this->load->view('privilege/privilege_group');
		$this->load->view('include/footer');
	}

	public function privilege_grouptype()
	{
		$this->load->view('include/header');
		$this->load->view('privilege/privilege_grouptype');
		$this->load->view('include/footer');
	}

	public function customer_registration()
	{
		$this->load->view('include/header');
		$this->load->view('customer/customer_registration');
		$this->load->view('include/footer');
	}

	public function customer_order_confirm()
	{
		$this->load->view('include/header');
		$this->load->view('customer/customer_order_confirm');
		$this->load->view('include/footer');
	}
}
