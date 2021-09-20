<?php



if (isset($_POST['update'])){

session_start();
require_once('DBconnect.php');

    $n = $_POST['uName'];
    $nid = $_POST['uNID'];
    $o = $_POST['uOccupation'];
    $s = $_POST['uSalary'];
    $g = $_POST['uGen'];
    $a = $_POST['uAge'];
    $usen = $_POST['uUsername'];
    $pass = $_POST['uPassword'];
    $r = $_POST['uRelationship'];

   $sql ="UPDATE `users` SET `NID`='$nid',`name`='$n',`user_username`='$usen',`password`='$pass',`age`='$a',`gender`='$g' , `occupation`='$o',`salary`='$s',`relationship_status`='$r' WHERE `users`.`ID`='".$_SESSION['user']."'";
    
$result = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
        //echo "update done";
        header("Location: userhome.php");
    }
    else{
        echo "not inserted";
    }
}


?>