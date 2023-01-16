<?php

// Require the database credentials
require_once $_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php';

class DataLayer
{
    // Add a field to store the database connection object
    private $_dbh;

    /**
     * Define a default constructor
     */
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

    /**
     * saveData saves classes and notes and inserts it into the DB
     * @param $data a data object
     * @return string the saved data id of row
     */
    function saveData($data)
    {
        // Define query
        $sql = "INSERT INTO advise_it(token) 
        VALUES(:token, :fall_class1, :fall_class2, :fall_class3, :fall_notes,
               :winter_class1, :winter_class2, :winter_class3, :winter_notes,
               :spring_class1, :spring_class2, :spring_class3, :spring_notes,
               :summer_class1, :summer_class2, :summer_class3, :summer_notes, :saved_date)";

        // Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // Bind the parameters
        //$statement->

        return null;
    }
}