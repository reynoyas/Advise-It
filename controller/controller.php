<?php

class Controller
{
    // f3 object
    private $_f3;


    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function plan()
    {
        $GLOBALS['dataLayer']->savePlan();
        $GLOBALS['dataLayer']->getPlan();
        $view = new Template();
        echo $view->render('views/advisor.html');
    }

    function login(){
        $un = "";
        $validLogin = true;

        // If the user is already logged in
        if(isset($_SESSION['username'])){
            // Redirect to home page
            header('location: admin');
        }

        // If the form has been submitted
        if(!empty($_POST)){
            // Get the form data
            $un = $_POST['username'];
            $pw = $_POST['password'];

            // Require the credentials file,
            // which defines a $logins array
            require('creds.php');

            // If the username is in the array and the passwords match
            if(array_key_exists($un, $logins) && $pw == $logins[$un]){
                // Record the username in the session array
                $_SESSION['username'] = $un;

                // Go to the page that the user came from
                // or else the home page
                $page = isset($_SESSION['page']) ? $_SESSION['page'] : "admin";
                header('location: '. $page);
            }

            // Invalid login -- set flag variable
            $validLogin = false;
        }

        $view = new Template();
        echo $view->render('views/login.php');
    }

    function logout(){
        $view = new Template();
        echo $view->render('views/logout.php');
    }

    function admin(){
        if(empty($_SESSION['username'])){
            // Store the current page in the session
            $_SESSION['page'] = "admin";

            // Redirect user to login page
            header('location: admin-login');
        }
        $view = new Template();
        echo $view->render('views/admin.html');
    }
}