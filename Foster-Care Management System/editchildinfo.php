<?php



if (isset($_POST['update'])){


require_once('DBconnect.php');
  
    $cname = $_POST['cName'];
    $ca = $_POST['cAge'];
    $cg = $_POST['cGender'];
    $carea = $_POST['cArea'];
    $cs = $_POST['cStatus'];
    $cu = $_POST['cUser'];

   $sql = "UPDATE `children` SET `child_age`='$ca',`child_gender`='$cg',`child_name`='$cname',`foster_area`='$carea' , `status`='$cs',`user_ID`='$cu' WHERE `ID`='".$_GET['id']."'";
    
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