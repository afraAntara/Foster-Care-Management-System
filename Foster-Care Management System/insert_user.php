<?php

require_once('DBconnect.php');

if (isset($_POST['update'])){
    $na = $_POST['name'];
    $i = $_POST['id'];
	$f = $_POST['nid'];
    $g = $_POST['gen'];
	$a = $_POST['age'];
    $o = $_POST['occ'];
    $s = $_POST['sal'];
    $r = $_POST['rel'];
    $u = $_POST['usen'];
    $p = $_POST['pass'];


    $sql = "INSERT INTO `users`(`ID`, `NID`, `name`, `user_username`, `password`, `age`, `gender`, `occupation`, `salary`, `relationship_status`) VALUES ('$i','$f','$na','$u','$p','$a','$g','$o','$s','$r')";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
		//echo "Sign Up Successful";
        header("Location: userlogin.php");
    }
    else{
        echo "not inserted";
    }
}

?>