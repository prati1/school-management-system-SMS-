
<html>
<head>
	<title>WELCOME TO ADMINISTRATION</title>
	      
		  	  <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Delete the student record?");
               if( retVal == true ){
                 //document.write ("User wants to continue!");
				  //echo<a href="deletestudent.php?student_id=' . $row['student_id'] . '"></a>;
				 $.get("deletestudent.php")
				  //var x = new XMLHttpRequest();
   // x.open("GET","deletestudent.php",true);
    //x.send();
                  return true;
               }
               else{
                  document.write ("User does not want to continue!");
                  return false;
               }
            }
         //-->
      </script>

</head>
<body>

<?php
/* 
	ADMIN.PHP
	Displays all data from 'administration' table
*/
	 include('config.php');
	 session_start();
	 

	// get results from database
	$result = mysql_query("SELECT * FROM sms.marks1 group by student_roll") 
		or die(mysql_error());  
	
	// display data in table
	echo "<p><b>View All</b>";
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th><th>Roll No</th> <th>Standard Name</th> <th>English</th><th>Nepali</th><th>Maths</th><th>Science</th><th>Environment</th><th>Social</th><th>Computer</th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		$id=$row['student_id'];
		// echo out the contents of each row into a table
		echo "<tr>";
				//echo '<td>'<a href="adminfullview.php?student_id=' . $row['student_id'] . '"> . $row['student_id'] . </a>'</td>';
		
		
		//echo '<td>' . $row['student_id'] . '</td>';
		echo '<td><a href="report.php?student_id=' . $row['student_id'] . '">$id</a></td>';
		echo '<td>' . $row['student_roll'] . '</td>';
		echo '<td>' . $row['Standard_name'] . '</td>';
		echo '<td>' . $row['english'] . '</td>';
		echo '<td>' . $row['nepali'] . '</td>';
		echo '<td>' . $row['maths'] . '</td>';
		echo '<td>' . $row['science'] . '</td>';
		echo '<td>' . $row['enve'] . '</td>';
		echo '<td>' . $row['social'] . '</td>';
		echo '<td>' . $row['computer'] . '</td>';
		echo '<td><a href="edit_marks_final.php?student_id=' . $row['student_id'] . '">Edit</a></td>';
		echo '<td><a href="deletemarks.php?student_id=' . $row['student_id'] . '">Delete</a></td>';
		//echo '<td><a href="#?student_id=' . $row['student_id'] . '" onclick="getConfirmation()">Delete</button></a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
	  
	  
?>
<p><a href="newreg.php">Add a new record</a></p>

</body>
</html>	
	

