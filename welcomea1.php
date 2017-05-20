<?php

session_start();

 $nam="smitha";
 
?>
<html>
<body>
<title>CSacademy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">CSacademy</a>

    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="welcomea.php">Home</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

        
        <p class="navbar-text" text-align:center>welcome 
          
        <?php  echo  $nam;
        ?>



        </p>
       
       
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>  Logout</a></li>
            
          </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>







<form action="addstudent.php" method="get">
 
   
  <input type="submit" value="add student">
  
</form>

<form action="addteacher.php" method="get">
<input type="submit" value="add teacher">
</form>
<form action="addparent.php" method="get">
  <input type="submit" value="add parent">
</form>
<form action="#" method="get">
  <input type="submit" value="view attendance">
</form>
<form action="message.php" method="get">
  <input type="submit" value="send message to parent">
</form>
  



</body>
</html>