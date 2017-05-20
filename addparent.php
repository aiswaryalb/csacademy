
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/addmember.css">
</head>
<body>
<a href="welcomea.php">
<i style="font-size:24px" class="fa">&#xf060;</i>
	</a>
	<form  action="logindb.php" autocomplete="on" method="post"> 
       
<h1>Sign Up</h1>
        
        <fieldset>
          
          <label for="username" >Your Registration Number</label>
            <input id="username" name="username" required="required" type="text" />
          
          <label for="name"> Enter your name</label>
            <input id="name" name="name" required="required" type="text" />
          
          
          
          
            <label for="student_id"> Enter your child's id</label>
            <input id="student_id" name="student_id" required="required" type="text" />
        
          
          <label for="password"  data-icon="p">Your password </label>
            <input id="password" name="password" required="required" type="password" " />
        <label for="confirmpassword"  >Please confirm your password </label>
        <input name="confirmpassword" type="password" id="confirmpassword" required="required" >
        
            
        
        </fieldset>
        <button type="submit" name ="submit" value="addparent">Add parent</button>
        


    </form>
</body>
</html>