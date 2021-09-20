<?php

session_start();
require_once('DBconnect.php');

if (isset($_POST['location'])){
    $a = $_POST['location'];

    $sql = "SELECT * FROM Children WHERE status='present' AND foster_area = '".$a."'";
    
    $result = $conn->query($sql);

$row = $result -> fetch_assoc();
    if(mysqli_num_rows($result)>0){
        $_SESSION['location'] = $row['foster_area'];
        header("Location: childByLocation.php");
    }
    else{
        echo "no child matched";
    }
}

?>