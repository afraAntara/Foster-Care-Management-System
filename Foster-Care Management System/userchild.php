<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style type="text/css">
       @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}
.test {
  margin-left: 220px;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: black;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:white;;
  background:#1b1e24;
  border-bottom:2px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:20px;
  font-weight: 100;
  padding:24px;
  text-align:center;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid white;
  border-bottom: 1px solid #C1C3D1;
  color:black;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:grey;
  color:#FFFFFF;
  border-top: 1px solid white;
}
a {
color: inherit;
  text-decoration: inherit;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:grey;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:center;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
 button{ width: 105px;
    font-family: sans-serif;
    font-size: 15px;
    color: white;
    padding:15px 15px; 
    background: black; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 3px;
    border-radius: 3px; 
    margin-top:20px;
    margin-right: 0px;
  } 
#b2{

    margin-left: 200px;
}
  button:hover {
    background-color: #6EB013;
  }  
  #b2:hover {
    background-color: red;
  }
    </style>
  
</head>
<body><center>
  <div class=test>
<div class="table-title">
<h3>Children details</h3>
</div>
<table class="table-fill">
<tbody class="table-hover">
    
    <div class=test>
<div class='table-title'>
</div>
<table class='table-fill'>
<thead>
    <tr>
      <th>Child_ID</th>
      <th>Name</th>
      <th>Foster_ID</th>
      <th>Select</th>
    </tr>
  </thead><tbody class='table-hover'>
<br>
<?php
session_start();
require_once('DBconnect.php');
     $age=   $_SESSION['child_age'];
     $gen=   $_SESSION['child_gender'];
     $area=   $_SESSION['child_area'];

    $sql = "SELECT * FROM children WHERE age='".$age."' ";
    
    $result = $conn->query($sql);

if ($result -> num_rows > 0) {
  while($row = $result -> fetch_array()) {
    echo "<tr><td>".$row["ID"]."</td><td>".$row['child_name']."</td><td>".$row['foster_ID']."</td><td><a href='select_childen.php?id=".$row["ID"]."'>Select</a></td></tr>";
  }
  echo "</tbody></table>";
}
         
     ?>
    </div></center>  
    <br><br>

</body>
</html>