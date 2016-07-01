<?php
   include("config.php");
   session_start();
   $error = NULL;
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from login
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

 
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $start=1;
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
		//session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
	  
#header {
    background-color:Navy  ;
    color:white;
    text-align:center;
    padding:80px;
	 font-family: "	Impact", Times, serif;
	 font-size:50px;
	font-weight: bold;
}
         body {
			
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "lightgrey">
	<div id="header">
welcome to our school
</div>
	
	<h3 style="color:blue;"><p align=" right"><a href="http://www.google.com">register now</a></p></h3><br><br><br><br><br><br>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" placeholder = "userName" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" placeholder = "Password" class = "box" /><br/><br />
                  <input type = "submit" value = " Log In "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div><br><br><br>
	<h6><p align= "center";text-font-family="arial">made by<br>adfsdgfg<br>iehrhehr<br></p></h6>
   </body>
</html>