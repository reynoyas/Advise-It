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
        try {
            // Instantiate a PDO database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "It is working";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "form has been posted";
                $token = $_POST['token'];
                $fall = $_POST['fall'];
                $winter = $_POST['winter'];
                $spring = $_POST['spring'];
                $summer = $_POST['summer'];

                echo "\nToken: $token";
                echo "\nThis is fall input: $fall";
                $sql = "INSERT INTO advise_it(token, fall, winter, spring, summer)
                VALUES($token, $fall, $winter, $spring, $summer)";

                $statement = $this->_dbh->prepare($sql);
                $statement->execute();

                // Process the results (get the primary key)
                return $this->_dbh->lastInsertId();
            }

        }
        catch(PDOException $e){
            echo "Error connecting to DB " . $e->getMessage();
        }
    }
}