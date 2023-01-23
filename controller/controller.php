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
}