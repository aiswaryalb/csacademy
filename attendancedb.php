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
 	
	 if ($_POST["submit"]=="attendance") {
 	$studid=$_POST["studid"];	
 	$att1=$_POST["a1"];;		
	$att2=$_POST["a2"];
	$att3=$_POST["a3"];
	$att4=$_POST["a4"];
	$att5=$_POST["a5"];
	$att6=$_POST["a6"];
 	
 	
 		mysql_query("INSERT INTO attendance (studid,a1,a2,a3,a4,a5,a6) VALUES ('$studid','$att1','$att2','$att3','$att4','$att5','$att6')");
 		header("Location:attmsg.php");
 	}
 	?>
 	</body>
 	</html>