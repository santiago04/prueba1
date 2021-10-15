<?php

require_once('config.php');

$link = mysqli_connect($DB_HOSTHAME, $DB_USER, $DB_PASSWORD, $DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>