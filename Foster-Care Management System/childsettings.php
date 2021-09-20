 <html lang="en">
<head>
<title>Edit Child Info</title>
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

  
 
    <h1>Child Info</h1>
    <?php
    
    require_once('DBconnect.php');
 

    $sql = "SELECT * FROM children WHERE ID='".$_GET['id']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
      

      $data = $result->fetch_array();
      
      echo $html='<html lang="en">
        <form action="editchildinfo.php? id='.$data['ID'].'" method="post">

          Name:<br>
          <input type="text" name="cName" value='.$data['child_name'].'>
          <br><br>
           Age:<br>
          <input type="text" name="cAge" value='.$data['child_age'].'>
          <br><br>
          Gender:<br>
            <input type="text" name="cGender" value='.$data['child_gender'].'>
          <br><br>
          Area:<br>
            <input type="text" name="cArea" value='.$data['foster_area'].'>
          <br><br>
         Status:<br>
            <input type="text" name="cStatus" value='.$data['status'].'>
          <br><br>
          Adopted by:<br>
            <input type="text" name="cUser" value='.$data['user_ID'].'>
          <br><br>
        
          <input name = "update" type = "submit" >
                                      
        </form> 


';

$html ="{$data['child_name']};{$data['foster_area']};{$data['child_gender']};{$data['child_age']};{$data['status']};{$data['child_age']}}";

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
