<?php

session_start();

 $name = $_SESSION["id"]; 
 
?>
<html>
  <head>
    <title>CSacademy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="css/parent.css" />
    
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

                
<br><br>

<h4>View messages</h4>
                <div class="container">
             <center>   
           <div class="column-center" >
              <form action="viewmsg.php" method="get">
              <input type="submit" value="view">
            </form>
            </div></center>
          </div>
                

                

                
                  <h4>View internal marks</h4>
                <div class="container">
                <center><div class="column-center">
              <form action="pmark.php" method="get">
              <input type="submit" value="mark">
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