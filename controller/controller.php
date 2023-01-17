<?php

class Controller
{
    // f3 object
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function advisor(){

        // Initialize variables
        $token = "";
        $fallClass1 = "";
        $fallClass2 = "";
        $fallClass3 = "";
        $fallNotes = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $token = $_POST['token'];
            $fallClass1 = $_POST['fallClass1'];
            $fallClass2 = $_POST['fallClass2'];
            $fallClass3 = $_POST['fallClass3'];
            $fallNotes = $_POST['fallNotes'];

            $_SESSION['savedClass'] = new SavedClasses();

            $_SESSION['savedClass']->setToken();
            $_SESSION['savedClass']->setFallClass1();
            $_SESSION['savedClass']->setFallClass2();
            $_SESSION['savedClass']->setFallClass3();
            $_SESSION['savedClass']->setFallNotes();
        }

        $this->_f3->set('token', $token);
        $this->_f3->set("fallClass1", $fallClass1);
        $this->_f3->set("fallClass2", $fallClass2);
        $this->_f3->set("fallClass3", $fallClass3);
        $this->_f3->set("fallNotes", $fallNotes);
    }
}