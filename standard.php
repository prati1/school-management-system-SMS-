
<html>
<head>
	<title>WELCOME TO ADMINISTRATION</title>

</head>
<body>

<?php
/* 
	MARKS.PHP
	Displays all data from 'marks' table
*/
	 include('config.php');
	 session_start();
	 

	// get results from database
	$result = mysql_query("SELECT * FROM sms.standard group by student_roll") 
		or die(mysql_error());  
	
	// display data in table
	//echo "<p><b>View All</b>";
	
	//echo "<table border='1' cellpadding='10'>";
	//echo "<tr> <th>Subject ID</th><th>Standard ID</th> <th>Standard Name</th></tr>";

	// loop through results of database query, displaying them in the table
	//while($row = mysql_fetch_array( $result )) {
		//$id=$row['student_id'];
		// echo out the contents of each row into a table
		echo "<tr>";
				//echo '<td>'<a href="adminfullview.php?student_id=' . $row['student_id'] . '"> . $row['student_id'] . </a>'</td>';
		
		
		//echo '<td>' . $row['student_id'] . '</td>';
		
		echo '<td>' . $row['eng_subject_id'] . '</td>';
		echo '<td>' . $row['eng_standard_id'] . '</td>';
		echo '<td>' . $row['eng_standard_name'] . '</td>';
		echo '<td>' . $row['nep_subject_id'] . '</td>';
		echo '<td>' . $row['nep_standard_id'] . '</td>';
		echo '<td>' . $row['nep_standard_name'] . '</td>';
		echo '<td>' . $row['math_subject_id'] . '</td>';
		echo '<td>' . $row['math_standard_id'] . '</td>';
		echo '<td>' . $row['math_standard_name'] . '</td>';
		echo '<td>' . $row['sci_subject_id'] . '</td>';
		echo '<td>' . $row['sci_standard_id'] . '</td>';
		echo '<td>' . $row['sci_standard_name'] . '</td>';
		echo '<td>' . $row['enve_subject_id'] . '</td>';
		echo '<td>' . $row['enve_standard_id'] . '</td>';
		echo '<td>' . $row['enve_standard_name'] . '</td>';
		//echo '<td><a href="edit.php?student_id=' . $row['student_id'] . '">Edit</a></td>';
		//echo '<td><a href="deletestudent.php?student_id=' . $row['student_id'] . '">Delete</a></td>';
		//echo '<td><a href="#?student_id=' . $row['student_id'] . '" onclick="getConfirmation()">Delete</button></a></td>';
		echo "</tr>"; 
	//} 

	// close table>
	echo "</table>";
	  
	  
?>
<p><a href="newreg.php">Add a new record</a></p>

</body>
</html>	
	

