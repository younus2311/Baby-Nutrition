<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cse311Project";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  // connecting to database


//-----for bangla------
mysqli_query($connection, 'SET CHARACTER SET utf8');
mysqli_query($connection, "SET SESSION collation_connection ='utf8_general_ci'");
?>
