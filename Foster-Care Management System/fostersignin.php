<?php

session_start();
require_once('DBconnect.php');

if (isset($_POST['fname']) && isset($_POST['pass'])){
    $u = $_POST['fname'];
    $p = $_POST['pass'];

    $sql = "SELECT * FROM foster WHERE foster_username = '".$u."' and password='".$p."'";
    
    $result = $conn->query($sql);

$row = $result -> fetch_assoc();
    if(mysqli_num_rows($result)>0){
        $_SESSION['manager'] = $row['ID'];
        header("Location: fosterhome.php");
    }
    else{
        header("Location: fosterlogin.php");
    }
}

?>