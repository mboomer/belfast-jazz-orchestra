<?php

    /**
    * Check if request is Ajax
    * @return boolean If true, request is ajax
    */
    // function is_ajax () {
    //     if (empty($_SERVER['HTTP_ACCEPT'])) return false;
    //     if (strtolower($_SERVER['HTTP_ACCEPT']) === 'application/json') return true;
    //     return false;
    // }

    // // If ajax, respond
    // if (is_ajax()) {
    //     http_response_code(200);
    //     die(json_encode(array(
    //         'msg' => 'You joined the list!',
    //         'redirect' => 'https://bjso.org.uk/'
    //     )));
    // }

    // If you didnt get from a POST, return to home page
    if ( $_SERVER['REQUEST_METHOD'] != "POST" ) {
        header("Location: ../index.php");
        exit();
    }

    // Include config file
    require_once "../../.php/inc/db.bjso.inc.php";

    // DB credentials as constants
    define('DB_HOST', $servername);
    define('DB_NAME', $db);
    define('DB_USER', $DBusername);
    define('DB_PASS', $DBpassword);

    //Receive the RAW data from the fetch POST
    $subscriptions = trim(file_get_contents("php://input"));

    // decode into an associative array
    $json_array = json_decode($subscriptions, true);

    try {
        // Try and establish the database connection.
        try {
            $dbh = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        }
        catch (PDOException $e) {
            exit("Error: " . $e->getMessage());
        };

        // check if email address already exists 
        $sql = "SELECT EmailAddress FROM Subscriptions WHERE EmailAddress = :EmailAddress";
            
        // prepare the query for the database connection
        $query = $dbh -> prepare($sql);

        // bind the parameters
        $query->bindParam(':EmailAddress', $emailaddress, PDO::PARAM_STR);

        // assign the values to the place holders from the POST FormData
        $emailaddress = $json_array["email"];

        // Execute prepared SELECT statement
        if ($query -> execute() === FALSE) {    
            echo(json_encode(array('msg' => 'Something Went Wrong, Please Try Again')));
            exit();
        } else {
                // Store the results of the query
                $results = $query -> fetchAll(PDO::FETCH_OBJ);
                
                // if a matching row is retrieved then the email address exists 
                if($query -> rowCount() > 0) {
                    echo(json_encode(array('msg' => 'Thank you...your email address has already been registered. We will keep you updated on upcoming events.')));
                    exit();
                } 
        };

        // The email address doesn't exist so go ahead and insert it

        //prepare the sql statement
        $sql = "INSERT INTO Subscriptions 
                    (EmailAddress, FirstName, LastName)
                VALUES
                    (:EmailAddress, :FirstName, :LastName)"; 

        // prepare the query for the database connection
        $query = $dbh -> prepare($sql);

        // bind the parameters
        $query->bindParam(':EmailAddress', $emailaddress, PDO::PARAM_STR);
        $query->bindParam(':FirstName',    $firstname,    PDO::PARAM_STR);
        $query->bindParam(':LastName',     $lastname,     PDO::PARAM_STR);

        /** need to have this header in place to make the return of the JSON successful */ 
        header("Content-Type: application/json");

        /** Assign the values assign the values to the place holders from the POST FormData*/
        $emailaddress = $json_array["email"];
        $firstname    = $json_array["firstn"];
        $lastname     = $json_array["lastn"];

        /**
        execute the query and check if it fails to insert prediction
        have to return something formatted as JSON to the calling PHP file 
        */
        if ($query -> execute() === FALSE) {    
            die(json_encode(array('msg' => 'Something went wrong. Please try again.')));
        };

        echo(json_encode(array('msg'    => 'Thank You ' . $firstname . ", " . "We will let your know when the next event has been scheduled")));

    }  // end of Try
    catch (PDOException $e) {
        echo 'Database Error ' . $e->getMessage() . ' in ' . $e->getFile() . ': '.$e->getLine();
    };

?>