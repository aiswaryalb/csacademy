<?php session_start(); ?>
    <!DOCTYPE html>
<?php include('header.php') ?>
<html>
<head>
	<title></title>
    <?php 
        if(isset($_SESSION["log"])){

         if($_SESSION["log"]==1&&$_SESSION["type"]=="s")
           header("Location: welcomes.php");
        elseif($_SESSION["log"]==1&&$_SESSION["type"]=="a")
           header("Location: welcomea.php");
         elseif($_SESSION["log"]==1&&$_SESSION["type"]=="t")
           header("Location: welcomet.php");
         elseif($_SESSION["log"]==1&&$_SESSION["type"]=="p")
           header("Location: welcomep.php");
         
        }   
        ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">



</head>
<body>
	<form action="logindb.php" method="post">
     	<!--<h1>Log In</h1>
     	<p>
            <label for="username" data-icon="u" > Enter your  ID</label>
            <input id="username" name="username" required="required" type="text"  />
        </p>
        <p> 
            <label for="password" data-icon="p"> Enter your password </label>
            <input id="password" name="password" required="required" type="password"  /> 
        </p>
         <p class="login button"> 
            <input type="submit" name="submit" value="login" /> 
    	</p>-->


<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Welcome !</h1>
    <form>
      <div class="input-container">
       <label for="username" data-icon="u" > </label>
            <input  id="username" name="username" required="required" type="text" placeholder="Enter your ID" />
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <label for="password" data-icon="p"> </label>
            <input id="password" name="password" required="required" type="password" placeholder="Enter your password" /> 
        <div class="bar"></div>
      </div>
      <div class="button-container">
       
      <button type="submit" name="submit" value="login">Login</button>
      </div>
      
    </form>
  </div>
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>



     </form>

</body>
</html>