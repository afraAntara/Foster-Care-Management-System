 <html lang="en">
<head>
<title>User Settings</title>
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
  <h2>User Settings</h2>
</header>

<section>

  
 
    <h1>Personal Info</h1>
    <?php
    session_start();
    require_once('DBconnect.php');
    $user_id = $_SESSION['user'];
    $sql = "SELECT * FROM users WHERE ID='".$_SESSION['user']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){

      $data = $result->fetch_array();
      echo $html='<html lang="en">
        <form action="edituserinfo.php" method="post">

          Name:<br>
          <input type="text" name="uName" value='.$data['name'].'>
          <br><br>
            NID:<br>
          <input type="text" name="uNID" value='.$data['NID'].'>
          <br><br>
          Occupation:<br>
            <input type="text" name="uOccupation" value='.$data['occupation'].'>
          <br><br>
          Salary:<br>
            <input type="text" name="uSalary" value='.$data['salary'].'>
          <br><br>
          Relationship Status:<br>
            <input type="text" name="uRelationship" value='.$data['relationship_status'].'>
          <br><br>
          Age:<br>
            <input type="text" name="uAge" value='.$data['age'].'>
          <br><br>
          Gender:<br>
            <input type="text" name="uGen" value='.$data['gender'].'>
          <br><br>
          Username:<br>
            <input type="text" name="uUsername" value='.$data['user_username'].'>
          <br><br>
          Password:<br>
            <input type="text" name="uPassword" value='.$data['password'].'>
          <br><br>

          <input name = "update" type = "submit" >
                                      
        </form> 


';

$html ="{$data['name']};{$data['NID']};{$data['age']};{$data['gender']};{$data['occupation']};{$data['salary']};{$data['user_username']};{$data['password']};{$data['relationship_status']}";

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
