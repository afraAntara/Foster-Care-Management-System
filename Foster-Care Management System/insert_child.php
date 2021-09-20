<?php
session_start();
 require_once('DBconnect.php');
if (isset($_POST['update'])){

    
    $na = $_POST['name'];
    $i = $_POST['id'];
    $g = $_POST['gen'];
    $a = $_POST['age'];
    $fa = $_POST['area'];
    $f=$_SESSION['manager'];

    $sql = "INSERT INTO `children` (`ID`, `foster_ID`, `child_age`, `child_gender`, `child_name`, `foster_area`) VALUES ('$i','$f','$a','$g','$na','$fa')";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
        //echo "insert done";
        header("Location: fosterhome.php");
    }
    else{
        echo "not inserted";
    }
}

?>