<?php session_start();

$sql=mysql_connect("localhost","root","");
if(!$sql)
  	  {
	   die("Couldn't connect".mysql_error());
	  }
   mysql_select_db("csacademy",$sql);
?>

<html>
<head>
	<title> CSACADEMY </title>
   
</head>
<body>
 	<?php
 	
	 if ($_POST["submit"]=="message") {
 	$parid=$_POST["id"];	
 	$subject=$_POST["subject"];;		
	$msg=$_POST["message"];
	
 	
 	
 		mysql_query("INSERT INTO message (id,sub,msg) VALUES ('$parid','$subject','$msg')");
 		header("Location:msgsent.php");
 	}
 	?>
 	</body>
 	</html>