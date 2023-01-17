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
//$con = new C
$dataLayer = new DataLayer();

// Define a default route
$f3->route('GET /', function (){
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /advisor', function (){
    // If the form has been posted
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//        $_SESSION['class1'] = $_POST['class1'];
//        $_SESSION['class2'] = $_POST['class2'];
//        $_SESSION['class3'] = $_POST['class3'];
//        $_SESSION['fallNotes'] = $_POST['fallNotes'];
        $fallClass1 = $_REQUEST['fallClass1'];
    }

    $view = new Template();
    echo $view->render('views/advisor.html');
});

$f3->run();

// Send output to the browser
ob_flush();
