<?php

class Controller
{
    // f3 object
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * The home page displays create plan button and login page info
     * The login page requires correct credentials
     */
    function home()
    {
        $un = "";
        $validLogin = true;

        // If the user is already logged in
        if(isset($_SESSION['username'])){
            // Redirect to admin page
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
        }
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * This function calls token and advisor generator
     * and passes it into savePlan, which will display on the plan page
     */
    function plan()
    {
        // Save token to pass into plan
        $token = $GLOBALS['dataLayer']->tokenGenerator();
        $this->_f3->set('token', $token);

        // Save advisor to pass into plan
        $advisor = $GLOBALS['dataLayer']->advisorGenerator();
        $this->_f3->set('advisor', $advisor);

        $GLOBALS['dataLayer']->savePlan($token, $advisor);
        $GLOBALS['dataLayer']->getPlan();

        $view = new Template();
        echo $view->render('views/advisor.html');
    }

    /**
     * Will logout and redirect to home page
     */
    function logout(){
        $view = new Template();
        echo $view->render('views/logout.php');
    }

    /**
     * The admin page will display the data from database
     * If the session is empty the user will be redirected to login page
     */
    function admin(){
        if(empty($_SESSION['username'])){
            // Store the current page in the session
            $_SESSION['page'] = "admin";

            // Redirect user to login page
            header('location: /admin');
        }

        $plan = $GLOBALS['dataLayer']->getPlan();
        $this->_f3->set('plan', $plan);

        $view = new Template();
        echo $view->render('views/admin.html');
    }
}