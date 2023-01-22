<?php
// Turn on output buffering
ob_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// Start the session
session_start();

// Create an instance of the Base class
$f3 = Base::instance();
$con = new Controller($f3);
$dataLayer = new DataLayer();

// Define a default route
$f3->route('GET /', function (){
    $GLOBALS['con']->home();
});

$f3->route('GET|POST /advisor', function (){
    $GLOBALS['con']->plan();
});

$f3->run();

// Send output to the browser
ob_flush();
