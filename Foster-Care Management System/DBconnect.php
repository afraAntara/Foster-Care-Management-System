<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "silverlinings";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check coonection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
    mysqli_select_db($conn, $dbname);	
     

?>