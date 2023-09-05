<?php
// Load the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Define the CodeIgniter environment
define('ENVIRONMENT', 'testing');

// Load the CodeIgniter index.php file
require __DIR__ . '/../index.php';

// Load the CodeIgniter testing configuration
$CI = &get_instance();
$CI->load->library('unit_test');

// Custom initialization for testing, if needed
// For example, you might set up database connections, load models, etc.

// Autoload your application's classes, if needed
// Composer's autoloader is usually sufficient for this purpose

// Optional: Enable PHP error reporting for testing
error_reporting(E_ALL);
ini_set('display_errors', '1');
