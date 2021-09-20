<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Author name"/>
<title>Login Page</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/animate.min.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>
</head>

<body>
<section id="header">
<div class="row">
<div class="col-md-2" style="font-size: 30px;color:#F2674A;">Silver Lining</div>
<div class="col-md-10" style="text-align:right">
	</div>
	</div>
	
	<div class="w3-top">
  
	
	
	</section>
 
            
	        <section id = "section1">
                
                <div class="title"> Foster Homes</div>
				<div style="margin-left:10%; margin-right:10%; margin-top:50px;margin-bottom:50px;text-align:center;background:#66b3ff;">
				<div class="row" style="padding:5px">
				<div class="col-md-3"> ID </div>
				<div class="col-md-3"> Registration ID </div>
				<div class="col-md-3"> Name </div>
				</div>
				
				<?php
                require_once('DBconnect.php');
				$sql="select * from foster";
				$result= mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)!=0){
					while($row=mysqli_fetch_array($result)){
				?>
						<div class="row" style="padding:5px">
				        <div class="col-md-3"> <?php echo $row[0]; ?> </div>
				        <div class="col-md-3"> <?php echo $row[1]; ?> </div>
				        <div class="col-md-3"> <?php echo $row[2]; ?> </div>
						</div>
						<?php
					}
					
				}
				?>
				</div>
            </section>
            
                
            <!-----Footer----->
            <section if="footer">
            
            </section>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="jquery.isotope.min.js"></script>
            <script src="js/wow.min.js"></script>
                
            </h2>
        </div>
    </div>
</div>
    
            
                    
</body>
</html>
