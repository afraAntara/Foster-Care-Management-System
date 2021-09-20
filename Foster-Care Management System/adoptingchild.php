<?php


session_start();
require_once('DBconnect.php');
  $childid=$_GET['id'];
  $userid=$_SESSION['user'];
   $query = "UPDATE `children` SET `user_ID`= '$userid' , `status`='adopted' WHERE `ID`='$childid'";
 
$data = mysqli_query($conn, $query);

if($data){

    echo"<script>('Adoption Successful')</script>"; 
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=userhome.php">

<?php
}

else{
    echo"<font color='red'>Sorry, adoption process failed";
}
?>