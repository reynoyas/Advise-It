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
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /advisor', function (){
    // If the form has been posted
    $view = new Template();
    echo $view->render('views/advisor.html');
});

$f3->run();

// Send output to the browser
ob_flush();
