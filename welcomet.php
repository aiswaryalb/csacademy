
<?php 
session_start();
$name = $_SESSION["id"]; 
 
?>
<html>
  <head>
    <title>CSacademy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="css/teacher.css" />
    
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

                <h3>Clear doubts</h3>
<div class="container">
                <center><div class="column-center">
              <form action="#" method="get">
              <input type="submit" value="clear doubts">
            </form>
            </div></center>
   
   
                  </div>      

<h4>Upload notes</h4>
               <div class="container">
                <center><div class="column-center">
              <form action="#" method="get">
              <input type="submit" value="upload notes">
              
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