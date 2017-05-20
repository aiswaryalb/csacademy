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
<a href="welcomea.php">
<i style="font-size:24px" class="fa">&#xf060;</i>
	</a>
 
	<div class="form">
		<form action="addmarkdb.php" method="post">
			Student id  <input type="text" name="studid"  size="60" required><br><br>
			Subject1    <input type="text" name="sub1"  size="60" required><br><br>
			Subject2  	<input type="text" name="sub2"  size="60" required><br><br>
			Subject3    <input type="text" name="sub3"  size="60" required><br><br>
			Subject4   	<input type="text" name="sub4"  size="60" required><br><br>
			Subject5   	<input type="text" name="sub5"  size="60" required><br><br>
			Subject6	<input type="text" name="sub6"  size="60" required><br><br>
			<button class="button" type="submit" name="submit" value="addmark">Upload marks</button>
		</form>
	</div>
</body>
</html>