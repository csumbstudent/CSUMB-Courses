<?php
#   this page contains the database connection details


#   CSUMB host default values
$host = "localhost";
$dbname = "ullo4940";
$username = "ullo4940";
$password = "vanessa336";

/**
#  MYWINDOWSHOSTING host details
$host = "MYSQL5002.myWindowsHosting.com";
$dbname = "db_9b4669_teampr";
$username = "9b4669_teampr";
$password = "team7336";
**/
/**
#   LOCALHOST DETAILS (personal computer)
$host = "localhost";
$dbname = "team_project";
$username = "root";
$password = "vanessa336";
**/
/**
#   the way that we were shown
    #   establishes a new database connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    
    #   shows errors when connecting to the database
    $dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
**/

#   connect using try catch -- this helps show a more specific error message

    try {
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    }   catch(PDOException $e)  {
        die($e->getmessage());
    }



?>