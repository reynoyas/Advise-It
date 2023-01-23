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
//            echo "It is working";
        }
        catch(PDOException $e){
            echo "Error connecting to DB " . $e->getMessage();
        }
    }

    function savePlan()
    {
        $token = $this->tokenGenerator();
        $fall = $_POST['fall'];
        $fallNotes = $_POST['fall_notes'];
        $winter = $_POST['winter'];
        $winterNotes = $_POST['winter_notes'];
        $spring = $_POST['spring'];
        $springNotes = $_POST['spring_notes'];
        $summer = $_POST['summer'];
        $summerNotes = $_POST['summer_notes'];
        $advisor = $this->advisorGenerator();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Define query
            $sql = "INSERT INTO advise_it(token, fall, fall_notes, winter, winter_notes,
                      spring, spring_notes, summer, summer_notes, advisor)
            VALUES(:token, :fall, :fall_notes, :winter, :winter_notes, 
                   :spring, :spring_notes, :summer, :summer_notes, :advisor)";
            // Prepare the statement
            $statement = $this->_dbh->prepare($sql);

            // Bind the parameters
            $statement->bindParam(':token', $token);
            $statement->bindParam(':fall', $fall);
            $statement->bindParam(':fall_notes', $fallNotes);
            $statement->bindParam(':winter', $winter);
            $statement->bindParam(':winter_notes', $winterNotes);
            $statement->bindParam(':spring', $spring);
            $statement->bindParam(':spring_notes', $springNotes);
            $statement->bindParam(':summer', $summer);
            $statement->bindParam(':summer_notes', $summerNotes);
            $statement->bindParam(':advisor', $advisor);

            // Execute the query
            $statement->execute();

            // Process the results (get the primary key)
            $id = $this->_dbh->lastInsertId();
            return $id;
        }
    }

    function tokenGenerator()
    {
        $token = $_GET['token'];
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789abcdefghijklmnopqrstuvwxyz';
        $result = "";

        for ($i = 0; $i < 6; $i++) {
            $chosen_char = rand(0, strlen($characters) - 1);
            $result = $result . $characters[$chosen_char];
        }
//        echo $result;
        return $result;
    }

    function getPlan()
    {
        // Define query
        $sql = "SELECT * FROM advise_it WHERE token = 'token'";

        // Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // Execute the query
        $statement->execute();

        // Process the results (get the primary key)
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function advisorGenerator(){
        $advisor = array("Ken", "Tyler");
        return $advisor[array_rand($advisor)];
    }
}