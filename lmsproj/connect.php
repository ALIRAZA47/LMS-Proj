<?php

$host = "localhost";        
$username = "root";
$password = "";
$dbname="mylms";
// /connect new database/ 
#phpinfo();
$conn = mysqli_connect($host, $username,$password, $dbname);
#mysqli_select_db($conn,$dbname);
// Check connection
if (!$conn) {
    echo("cannot connect with database");
}

?>