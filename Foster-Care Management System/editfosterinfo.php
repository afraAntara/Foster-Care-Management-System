<?php



if (isset($_POST['update'])){

session_start();
require_once('DBconnect.php');

    $fn = $_POST['fName'];
    $rid = $_POST['fReg'];
    $ph = $_POST['fPhone'];
    $e = $_POST['fEmail'];
    $fa = $_POST['fArea'];
    $fusen = $_POST['fUsername'];
    $fpass = $_POST['fPassword'];

   $sql ="UPDATE `foster` SET `foster_name`='$fn',`registration_ID`='$rid',`phone`='$ph',`email`='$e',`foster_username`='$fusen',`password`='$fpass',`foster_area`='$fa' WHERE `foster`.`ID`='".$_SESSION['manager']."'";


    
$result = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
        //echo "update done";
        header("Location: fosterhome.php");
    }
    else{
        echo "not inserted";
    }
}


?>