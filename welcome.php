<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout1.php">Log Out</a></h2>
	  <h3><a href = "indx.php">Admin</a></h2>
   </body>
   
</html>