<?php 
    //Start Session
    session_start();

//Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost:8082/srm/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'srm');

//3. Execute Query and Save Data in Database
$con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(); //Database COnnection
$db_select = mysqli_select_db($con, DB_NAME) or die(); //Selecting Database

?>