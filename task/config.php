<?php
 
/**
 * Database config variables
 */
define("HOST", "localhost");
define("USER", "root");
define("PASS", "root");
define("DB", "task");

 
 //Connecting to database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?>
