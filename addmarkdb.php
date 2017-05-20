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
 	
	 if ($_POST["submit"]=="addmark") {
 	$studid=$_POST["studid"];	
 	$sub1=$_POST["sub1"];;		
	$sub2=$_POST["sub2"];
	$sub3=$_POST["sub3"];
	$sub4=$_POST["sub4"];
	$sub5=$_POST["sub5"];
	$sub6=$_POST["sub6"];
 	
 	
 		mysql_query("INSERT INTO marklist (studid,s1,s2,s3,s4,s5,s6) VALUES ('$studid','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6')");
 		header("Location:markmsg.php");
 	}
 	?>
 	</body>
 	</html>