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
<body><?php

if ($_POST["submit"]=="search") {
$bookname=$_POST["bookname"];
 	  $bookname = strtoupper($bookname);
$bookname = strip_tags($bookname);
$bookname = trim ($bookname);
 	
 	$strSQL = "SELECT * FROM booklist WHERE bname LIKE '%$bookname%' ";
      $rs = mysql_query($strSQL);
 	print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>Book ID:</td> 
<td width=100>Name of book:</td> 
<td width=100>Author:</td> 
<td width=100>Publisher:</td> 
<td width=100>Edition:</td> 
<td width=100>Price:</td> 
<td width=100>Contact:</td> 
 
</tr>"; 
 while($row = mysql_fetch_array($rs)) {
        
          print "<tr>"; 
print "<td>" . $row['bid'] . "</td>"; 
print "<td>" . $row['bname'] . "</td>"; 
print "<td>" . $row['bauthor'] .  "</td>"; 
print "<td>" . $row['bpublisher'] . "</td>";
print "<td>" . $row['bedition'] . "</td>";
print "<td>" . $row['bmrp'] . "</td>";
print "<td>" . $row['bcontact'] . "</td>";
 
print "</tr>"; 
} 
print "</table>"; 
    mysql_close();



?>}
</body>
</html>

