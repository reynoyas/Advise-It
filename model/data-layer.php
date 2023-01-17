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
//        $sql = "INSERT INTO advise_it(token, fall_class1, fall_class2, fall_class3, fall_notes)
//        VALUES(:token, :fall_class1, :fall_class2, :fall_class3, :fall_notes)";

        $sql  = "INSERT INTO advise_it(token)
        VALUES(:token)";
        // Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // Bind the parameters
        $statement->bindParam(':token', $data->getToken());
        $statement->bindParam(':fall_class1', $data->getFallClass1());
        $statement->bindParam(':fall_class2', $data->getFallClass2());
        $statement->bindParam(':fall_class3', $data->getFallClass3());
        $statement->bindParam(':fall_notes', $data->getFallNotes());

        $statement->execute();

        $token = $this->_dbh->lastInsertId();

        return $token;
    }
}