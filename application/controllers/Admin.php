<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_m','admin');
		
	}
	public function index($value='')
	{
		# code...
	}
}