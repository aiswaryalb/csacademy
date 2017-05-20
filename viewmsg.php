<html>
<head><?php session_start();
$name = $_SESSION["id"]; 
$sql=@mysql_connect("localhost","root","");
if(!$sql)
      {
     die("Couldn't connect".mysql_error());
    }
   mysql_select_db("csacademy",$sql);
?>
  
    <title> CSACADEMY </title>
   
</head>
<body>
    <?php 
      
      $strSQL = "SELECT * FROM message WHERE id=$name ";
      $rs = mysql_query($strSQL);
      print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>Subject:</td> 
<td width=100>Message:</td> 

 
</tr>"; 
      while($row = mysql_fetch_array($rs)) {
        
          print "<tr>"; 

print "<td>" . $row['sub'] . "</td>"; 
print "<td>" . $row['msg'] .  "</td>"; 

 
print "</tr>"; 
} 
print "</table>"; 
    mysql_close();
    ?>

    </body>
    </html>