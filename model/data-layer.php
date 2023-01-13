<?php

// Require the database credentials
require_once $_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php';

class DataLayer
{
    // Add a field to store the database connection object
    private $_dbh;

    // Define a default constructor
    function __construct()
    {
        try{
            // Instantiate a PDO database object
            $this->_dbh  = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "It is working";
        }
        catch(PDOException $e){
            echo "Error connecting to DB " . $e->getMessage();
        }
    }
}