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
        $fall = "";
        $winter = "";
        $spring = "";
        $summer = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //$token = $_POST['token'];
            $fall = $_POST['fall'];
            $fallNotes = $_POST['fall_notes'];
            $winter = $_POST['winter'];
            $winterNotes = $_POST['winter_notes'];
            $spring = $_POST['spring'];
            $springNotes = $_POST['spring_notes'];
            $summer = $_POST['summer'];
            $summerNotes = $_POST['summer_notes'];
        }

        $token = $GLOBALS['dataLayer']->tokenGenerator();

        $this->_f3->set('token', $token);
        $this->_f3->set('fall', $fall);
        $this->_f3->set('fall_notes', $fallNotes);
        $this->_f3->set('winter', $winter);
        $this->_f3->set('winter_notes', $winterNotes);
        $this->_f3->set('spring', $spring);
        $this->_f3->set('spring_notes', $springNotes);
        $this->_f3->set('summer', $summer);
        $this->_f3->set('summer_notes', $summerNotes);

        $GLOBALS['dataLayer']->savePlan();
        $view = new Template();
        echo $view->render('views/advisor.html');
    }
}