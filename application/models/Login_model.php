<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load necessary libraries, helpers, or database connections here
    }

    public function validate_login($username, $password) {
        // Example: You would typically validate against a database
        // For demonstration purposes, let's assume we have a hardcoded username and password
        $valid_username = 'admin';
        $valid_password = 'password';

        // Check if the provided username and password match the hardcoded values
        if ($username === $valid_username && $password === $valid_password) {
            return true; // Valid login
        } else {
            return false; // Invalid login
        }
    }

}
?>
