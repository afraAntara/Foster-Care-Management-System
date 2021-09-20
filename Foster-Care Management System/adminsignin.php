<?php

require_once('DBconnect.php');

if (isset($_POST['fname']) && isset($_POST['pass'])){
    $u = $_POST['fname'];
    $p = $_POST['pass'];

    $sql = "SELECT * FROM admin WHERE admin_username = '$u' AND password='$p'";
    
    $result = $conn->query($sql);

    if(mysqli_num_rows($result)>0){
        header("Location: adminhome.php");
    }
    else{
        header("Location: adminlogin.php");
    }
}

?>