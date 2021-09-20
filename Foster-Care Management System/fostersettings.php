 <html lang="en">
<head>
<title>Foster Settings</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h1>Silver Linings</h1>

<header>
  <h2>Foster Settings</h2>
</header>

<section>

  
 
    <h1>About Foster-Care</h1>
    <?php
    session_start();
    require_once('DBconnect.php');
    //$manager_id = $_SESSION['manager'];
    $sql = "SELECT * FROM foster WHERE ID='".$_SESSION['manager']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){

      $data = $result->fetch_array();
      echo $html='<html lang="en">
        <form action="editfosterinfo.php" method="post">

          Name:<br>
          <input type="text" name="fName" value='.$data['foster_name'].'>
          <br><br>
           Registration ID:<br>
          <input type="text" name="fReg" value='.$data['registration_ID'].'>
          <br><br>
          Phone:<br>
            <input type="text" name="fPhone" value='.$data['phone'].'>
          <br><br>
          Email:<br>
            <input type="text" name="fEmail" value='.$data['email'].'>
          <br><br>
          Area:<br>
            <input type="text" name="fArea" value='.$data['foster_area'].'>
          <br><br>
          Username:<br>
            <input type="text" name="fUsername" value='.$data['foster_username'].'>
          <br><br>
          Password:<br>
            <input type="text" name="fPassword" value='.$data['password'].'>
          <br><br>

          <input name = "update" type = "submit" >
                                      
        </form> 


';

$html ="{$data['foster_name']};{$data['foster_area']};{$data['phone']};{$data['email']};{$data['foster_username']};{$data['password']};{$data['registration_ID']}";

$codeHTML = utf8_encode($html);

 }
;



?>



</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
