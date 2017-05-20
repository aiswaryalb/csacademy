<?php session_start();
?>

<html>
<head>
	<title> CSACADEMY </title>
   <?php 	
   $sql=mysql_connect("localhost","root","");
   if(!$sql)
  	  {
	   die("Couldn't connect".mysql_error());
	  }
   mysql_select_db("csacademy",$sql);
	?>
</head>
<body>
 	<?php 
 	//$id='123456';
 	//$pwd='123456';
 	//$nam='smitha';
 	//mysql_query("INSERT INTO admin (id,password,name) VALUES ('123456','123456','smitha')");
 	if(isset($_POST["username"])){
			$id=$_POST["username"];
			$pwd=$_POST["password"];
 	if ($_POST["submit"]=="login") {
				$tmp=mysql_fetch_array(mysql_query("SELECT * FROM admin where id = '$id' AND password = '$pwd'"));
				$tmp1=mysql_fetch_array(mysql_query("SELECT * FROM student where id = '$id' AND password = '$pwd'"));
				$tmp2=mysql_fetch_array(mysql_query("SELECT * FROM teacher where tid = '$id' AND password = '$pwd'"));
				$tmp3=mysql_fetch_array(mysql_query("SELECT * FROM parent where pid = '$id' AND password = '$pwd'"));
				if($tmp){
					$_SESSION["log"]=1;
					$_SESSION["type"]="a";
					$_SESSION["id"]=$id;
					$_SESSION["name"]=$tmp["name"];
					header("Location:welcomea.php");

				}
				elseif ($tmp1) {
					$_SESSION["log"]=1;
					$_SESSION["type"]="s";
					$_SESSION["id"]=$id;
					$_SESSION["name"]=$tmp["name"];
					header("Location:welcomes.php");
				}
				elseif ($tmp2) {
					$_SESSION["log"]=1;
					$_SESSION["type"]="t";
					$_SESSION["id"]=$id;
					$_SESSION["name"]=$tmp["name"];
					header("Location:welcomet.php");
				}
				elseif ($tmp3) {
					$_SESSION["log"]=1;
					$_SESSION["type"]="p";
					$_SESSION["id"]=$id;
					$_SESSION["name"]=$tmp["name"];
					header("Location:welcomep.php");
				}
				else{
					unset($_SESSION["log"]);
					unset($_SESSION["type"]);
					header("Location:wrongpassword.php");
				}
				/*else{
					unset($_SESSION["log"]);
					unset($_SESSION["type"]);
					header("Location:wrongpassword.php");
				}*/
				
			}
			
			elseif(($_POST["submit"])=="addstudent"){
				
				$nam=$_POST["name"];
				$btch=$_POST["batch"];
				$yr=$_POST["year"];
				$sem=$_POST["semester"];
				$confirmpassword = $_POST["confirmpassword"];
				if ($pwd==$confirmpassword) {
				mysql_query("INSERT INTO student (id,password,name,semester,batch,year) VALUES ('$id','$pwd','$nam','$sem','$btch','$yr')");
				$_SESSION["log"]=1;
			    $_SESSION["id"]=$_POST["username"];
			    $_SESSION["name"]=$_POST["name"];
			    $_SESSION["type"]="s";
			    header("Location:success.php");
			}
			else{
					
					header("Location:passwordmatch.php");
				}
			}
			elseif(($_POST["submit"])=="addteacher"){
				
				$nam=$_POST["name"];
				$confirmpassword = $_POST["confirmpassword"];
				if ($pwd==$confirmpassword) {
				mysql_query("INSERT INTO teacher (tid,password,name) VALUES ('$id','$pwd','$nam')");
				$_SESSION["log"]=1;
			    $_SESSION["id"]=$_POST["username"];
			    $_SESSION["name"]=$_POST["name"];
			    $_SESSION["type"]="t";
			    header("Location:success.php");
			}
			else{
					
					header("Location:passwordmatch.php");
				}
			}
			elseif(($_POST["submit"])=="addparent"){
				
				$nam=$_POST["name"];
				$sid=$_POST["student_id"];
				$confirmpassword = $_POST["confirmpassword"];
				if ($pwd==$confirmpassword) {
					
				
				mysql_query("INSERT INTO parent (pid,password,name,sid) VALUES ('$id','$pwd','$nam','$sid')");
				$_SESSION["log"]=1;
			    $_SESSION["id"]=$_POST["username"];
			    $_SESSION["name"]=$_POST["name"];
			    $_SESSION["type"]="p";
			    header("Location:success.php");

			    }
			    else{
					
					header("Location:passwordmatch.php");
				}
	
			}

}





			?>