<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // Load necessary libraries and helpers here
    }
	
	public function index()
	{
		$this->load->view('home');
	}
}
