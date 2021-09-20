 <html lang="en">
<head>
<title>admin home</title>
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
  <h2>Admin View</h2>
</header>

<section>
  <nav>
    <ul>     
      <li><a href="FosterInfo.php">Foster-Care Homes</a></li>
      <li><a href="UserInfo.php">Users</a></li>
      <li><a href="ChildInfo.php">Children</a></li>
     <li><a href="Add_fosterhome.php">Add new Foster Home</a></li>
      <li><a href="totalfoster.php">Total foster care home</a></li>
    <li><a href="totalChild.php">Total Child Of Each foster care home</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Welcome!</h1>
    
  </article>
</section>


</body>
</html>
