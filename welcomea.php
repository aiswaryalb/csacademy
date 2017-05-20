<?php

session_start();

 $nam="smitha";
 
?>
<html>
	<head>
		<title>CSacademy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="css/admin.css" />
		
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						
						<nav id="nav">
							<ul>
								<li class="special">
									<p class="navbar-text" text-align:center>welcome 
          
        <?php  echo  $nam;
        ?>



        </p>
       
       
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>  Logout</a></li>
									
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<br><br><br><br><br><br><br><br>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>Add members</h3>
								
			
<div class="container">
   <div class="column-center">
   						<form action="addteacher.php" method="get">
<input type="submit" value="add teacher">
</form>
	</div>
   <div class="column-left">
   						<form action="addstudent.php" method="get">
 
   
  <input type="submit" value="add student">
  
</form>

						
						
   						
   </div>
   <div class="column-right">
   						<form action="addparent.php" method="get">
  <input type="submit" value="add parent">
</form>
   </div>
</div>
<br><br>
								
<h4>Upload internal marks</h4>
								<div class="container">
								<center><div class="column-center">
   						<form action="addmark.php" method="get">
  						<input type="submit" value="upload marks">
						</form>
						</div></center>
   
   
									</div>
								

								
								<h4>Upload attendance details</h4>
                <div class="container">
                <center><div class="column-center">
              <form action="attendance.php" method="get">
              <input type="submit" value="upload attendance">
            </form>
            </div></center>
   
   
                  </div>
									<h4>Notify parents</h4>
								<div class="container">
								<center><div class="column-center">
   						<form action="message.php" method="get">
  						<input type="submit" value="send message to parent">
						</form>
						</div></center>
   
   
									</div>
							</div>
						</section>
					</article>

				<!-- Footer -->
					

			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			
			<script src="js/main.js"></script>

	</body>
</html>