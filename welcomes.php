<?php 
session_start();
$name = $_SESSION["id"]; 
 
?>
<html>
  <head>
    <title>CSacademy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="css/student.css" />
    
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
          
        <?php  echo  $name;
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

                <h3>Ask and clear doubts</h3>
                
      
<div class="container">
   <div class="column-center">
              <form action="doubt.php" method="get">
<input type="submit" value="ask doubts">
</form>
  </div>
   <div class="column-left">
              <form action="#" method="get">
 
   
  <input type="submit" value="clear doubts">
  
</form>

            
            
              
   </div>
   
</div>
<br><br>

<h4>Buy or sell books</h4>
                <div class="container">
                <div class="column-center" align="left">
              <form action="buybook.php" method="get">
              <input type="submit" value="buy book">
            </form>
            </div>
           <div class="column-center" >
              <form action="sellbook.php" method="get">
              <input type="submit" value="sell book">
            </form>
            </div>
          </div>
                

                

                <h4>View attendance details</h4>
                <div class="container">
                <center><div class="column-center">
              <form action="viewatt.php" method="get">
              <input type="submit" value="view attendance">
            </form>
            </div></center>
   
   
                  </div>
                  <h4>View internal marks</h4>
                <div class="container">
                <center><div class="column-center">
              <form action="viewmark.php" method="get">
              <input type="submit" value="mark">
            </form>
            </div></center>
   
   
                  </div>

<h4>Download notes</h4>
                <div class="container">
                <center><div class="column-center">
              <form action="#" method="get">
              <input type="submit" value="download">
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