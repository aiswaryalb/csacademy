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
      
      $strSQL = "SELECT * FROM marklist LEFT JOIN parent ON marklist.studid=parent.sid WHERE parent.pid=$name ";
      $rs = mysql_query($strSQL);
      print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>Subject1:</td> 
<td width=100>Subject2:</td> 
<td width=100>Subject3:</td> 
<td width=100>Subject4:</td>
<td width=100>Subject5:</td> 
<td width=100>Subject6:</td>

 
</tr>"; 
      while($row = mysql_fetch_array($rs)) {
        
          print "<tr>"; 

print "<td>" . $row['s1'] . "</td>"; 
print "<td>" . $row['s2'] .  "</td>"; 
print "<td>" . $row['s3'] .  "</td>"; 
print "<td>" . $row['s4'] .  "</td>"; 
print "<td>" . $row['s5'] .  "</td>"; 
print "<td>" . $row['s6'] .  "</td>"; 
 
print "</tr>"; 
} 
print "</table>"; 
    mysql_close();
    ?>

    </body>
    </html>