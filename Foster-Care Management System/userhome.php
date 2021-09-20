 <html lang="en">
<head>
<title>User Home</title>
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
  <h2>User View</h2>
</header>

<section>
  <nav>
    <ul>
      <h2>Look For Children</h2><br/>
           <section id="section1">
       <form action="searchByAge.php" class="form_design" method="post">
         Age: <input type="text" name="age"> <br/>
         <input type="submit" value="SEARCH">
       </form>
     </section>
	 <section id="section2">
       <form action="searchByGender.php" class="form_design" method="post">
         Gender: <input type="text" name="gender"> <br/>
         <input type="submit" value="SEARCH">
       </form>
     </section>
	 <section id="section3">
       <form action="searchByLocation.php" class="form_design" method="post">
         Location: <input type="text" name="location"> <br/>
         <input type="submit" value="SEARCH">
       </form>
     </section>

    </ul>
  </nav>
  
  <article>
    <h1>Personal Info</h1>
    <?php
    session_start();
require_once('DBconnect.php');
$user_id = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE ID='".$user_id."'";
  $result = $conn->query($sql);
  if($result->num_rows>0){

    $data = $result->fetch_array();
    echo $html='<html lang="en">

 <label><h3>Name: '.$data['name'].' </h3></label>
 <label><h3>NID: '.$data['NID'].' </h3></label>
  <label><h3>Occupation: '.$data['occupation'].' </h3></label>
 <label><h3>Salary: '.$data['salary'].' </h3></label>


';

//$html ="{$data['user_username']};{$data['password']};{$data['occupation']}";
$html ="{$data['name']};{$data['NID']};{$data['occupation']};{$data['salary']}";

$codeHTML = utf8_encode($html);

 }

?>


  </article>
</section>

<footer>
  <p> <a href="usersettings.php">Settings</a></p>
</footer>

</body>
</html>
