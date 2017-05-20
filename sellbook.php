<?php 
session_start();?>
<html>
<head>
	<title>CStore</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css" />
	<link rel="stylesheet" type="text/css" href="css/msg.css" />
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
</head>

<body>
<a href="welcomes.php">
<i style="font-size:24px" class="fa">&#xf060;</i>
	</a>
 
	<div class="form">
		<form action="sellbookdb.php" method="post">
			Bookname   <input type="text" name="bookname" size="60" required><br><br>
			Author     <input type="text" name="author" size="60" required><br><br>
			Publisher  <input type="text" name="publisher" size="60" required><br><br>
			Edition    <input type="text" name="edition" size="60" required><br><br>
			MRP    	   <input type="text" name="MRP" size="60" required><br><br>
			Contact   	<input type="text" name="contact" size="60" required><br><br>
			
			<button class="button" type="submit" name="submit" value="addbook">Add this book</button>
		</form>
	</div>
</body>
</html>