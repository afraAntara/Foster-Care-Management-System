<?php

require_once('DBconnect.php');

if (isset($_POST['fid']) && isset($_POST['nfos']) && isset($_POST['rid']) && isset($_POST['fu']) && isset($_POST['pass'])){
    $i = $_POST['fid'];
    $n = $_POST['nfos'];
    $r = $_POST['rid'];
	$u = $_POST['fu'];
    $p = $_POST['pass'];

    $sql = "INSERT INTO foster (`ID`, `foster_name`, `registration_ID`, `foster_username`, `password`) VALUES('".$i."','".$n."','".$r."','".$u."','".$p."')";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
		//echo "insert done";
        header("Location: adminhome.php");
    }
    else{
        echo "not inserted";
    }
}

?>