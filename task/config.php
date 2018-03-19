<?php
 
/**
 * Database config variables
 */
define("HOST", "localhost");
define("USER", "celespy_task");
define("PASS", "celespy_task");
define("DB", "celespy_task");

 
 //Connecting to database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?>