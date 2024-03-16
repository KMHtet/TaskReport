<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function __construct() {
        parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
        // Load necessary libraries and models here
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function process_login() {
		echo "Login successful!";
        // $username = $this->input->post('username');
        // $password = $this->input->post('password');

        // // Validate the login credentials (You would typically validate against a database)
        // if ($this->login_model->validate_login($username, $password)) {
        //     // Successful login
        //     echo "Login successful!";
        //     // Redirect to another page, e.g., dashboard
        //     // redirect('dashboard');
        // } else {
        //     // Failed login
        //     echo "Invalid username or password!";
        //     // Reload the login page with an error message
        //     // $this->load->view('login', array('error' => 'Invalid username or password'));
        // }
    }
}
