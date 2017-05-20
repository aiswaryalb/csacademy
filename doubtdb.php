

<?php session_start();
$name = $_SESSION["id"];
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
 	
	 if ($_POST["submit"]=="uploaddoubts") {
	 	$did="";
	 	$dask=	$name;
 	$doubt=$_POST["message"];	
 	mysql_query("INSERT INTO doubt (did,dask,doubt) VALUES ('$did','$dask','$doubt')");
 		header("Location:messages.php");
 	}
 	?>
 	</body>
 	</html>	
	