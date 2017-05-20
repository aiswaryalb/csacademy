<?php 
session_start();

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <link rel="stylesheet" href="css/doubt.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<a href="welcomes.php">
<i style="font-size:24px" class="fa">&#xf060;</i>
  </a>
<form action="doubtdb.php" class="contact" method="post">
    <fieldset class="contact-inner">
      <p>
        Enter your doubt
      </p>

      

      <p class="contact-input">
        
        <textarea type="text" name="message" placeholder="Doubts.."></textarea>
      </p>

      <p class="contact-submit">
      <button class="button" type="submit" name="submit" value="uploaddoubts">Upload doubts</button>
       <!--<input type="submit" value="Submit doubt">-->
      </p>
    </fieldset>
  </form>
</body>
</html>