<?php

session_start();
require_once('DBconnect.php');

if (isset($_POST['gender'])){
    $a = $_POST['gender'];

    $sql = "SELECT * FROM Children WHERE status='present' AND child_gender = '".$a."'";
    
    $result = $conn->query($sql);

$row = $result -> fetch_assoc();
    if(mysqli_num_rows($result)>0){
        $_SESSION['gender'] = $row['child_gender'];
        header("Location: childByGender.php");
    }
    else{
        echo "no child matched";
    }
}

?>