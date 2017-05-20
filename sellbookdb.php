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
 	
	 if ($_POST["submit"]=="addbook") {
 	$bookid="";	
 	$bookow=$name;		
	$bookname=$_POST["bookname"];
	$author=$_POST["author"];
	$publisher=$_POST["publisher"];
	$edition=$_POST["edition"];
	$MRP=$_POST["MRP"];
 	$contact=$_POST["contact"];
 	$status='0';
 	
 		mysql_query("INSERT INTO booklist (bid,bowner,bname,bauthor,bpublisher,bedition,bmrp,bcontact,status) VALUES ('$bookid','$bookow','$bookname','$author','$publisher','$edition','$MRP','$contact','$status')");
 		header("Location:messages.php");
 	}
 	?>
 	</body>
 	</html>