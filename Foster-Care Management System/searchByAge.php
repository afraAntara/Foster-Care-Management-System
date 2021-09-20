<?php

session_start();
require_once('DBconnect.php');

if (isset($_POST['age'])){
    $a = $_POST['age'];

    $sql = "SELECT * FROM Children WHERE  status='present' AND child_age = '".$a."' ";
    
    $result = $conn->query($sql);

$row = $result -> fetch_assoc();
    if(mysqli_num_rows($result)>0){
        $_SESSION['age'] = $row['child_age'];
        header("Location: childByAge.php");
    }
    else{
        echo "no child matched";
    }
}

?>