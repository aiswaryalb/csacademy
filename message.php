<!-- 
contact form created for treehouse competition.
-->
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/message.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<a href="welcomea.php">
<i style="font-size:24px" class="fa">&#xf060;</i>
	</a>
<form action="messagedb.php" method="post">
  <div class="container">
    <div class="head">
      
    </div>
    <input type="text" name="id" placeholder="Parent ID" /><br />
    <input  type="text" name="subject" placeholder="Subject" /><br />
    <textarea type="text" name="message" placeholder="Message"></textarea><br />
    
    <button id="submit"  type="submit" name="submit" value="message">
      Send!
    </button>
  </div>
</form>
<!--<script src="js/message.js"></script>-->
</body>
</html>