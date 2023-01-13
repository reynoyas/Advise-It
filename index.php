<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// Start the session
//session_start();

// Create an instance of the Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function (){
    $view = new Template();
    echo $view->render('views/advisor.html');
});

$f3->run();