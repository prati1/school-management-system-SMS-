
<html>
<head>
	<title>STUDENT DETAIL</title>
</head>
<body>
<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>working</b></div>
<?php
/* adminfullview.php
	Displays all data from 'student' table
	Displays information about student
*/
	 include('config.php');
	 session_start();
	 
	// get results from database
	$result = mysql_query("SELECT s.student_id,CONCAT(first_name, ' ',middle_name,' ', last_name) As Name,CONCAT(gfirst_name, ' ',gmiddle_name,' ', glast_name) As gName,
	gender, DOBad, date_of_admission, student_roll, YEAR(CURDATE()) - YEAR(DOBad) AS age, phone_no,CONCAT(address_temp_street,'-',address_temp_ward,',',address_temp_vdcmun,',',address_temp_district,',',address_temp_zone,',',address_temp_country) as temp_address
	FROM sms.student s, sms.guardian g WHERE s.student_id=g.std_id and student_id=12312") 
		or die(mysql_error());  
		
		
		
		
		
		
	
	// display data in table
	echo "<p><b>Student Info</b>";

	echo "<table border='1' cellpadding='10'>";
	echo "<tr><th>ID</th></tr>";
	echo "<tr><th>Name</th></tr>";
	echo "<tr><th>Guardian Name</th><tr>";
	echo "<tr><th>Gender</th><tr>";
	echo "<tr><th>Date of Admission</th><tr>";
	echo "<tr><th>Date of Birth</th><tr>";
	echo "<tr><th>Roll No</th><tr>";
	echo "<tr><th>Temporary Address</th><tr>";
	echo "<tr><th>Phone No</th><tr>";
	

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
	
		
			
			echo "<tr>";
		echo '<td>' . $row['student_id'] . '</td>';
		echo '<td>' . $row['Name'] . '</td>';
		echo '<td>' . $row['gName'] . '</td>';
		echo '<td>' . $row['gender'] . '</td>';
		echo '<td>' . $row['date_of_admission'] . '</td>';
		echo '<td>' . $row['DOBad'] . '</td>';
		echo '<td>' . $row['student_roll'] . '</td>';
		echo '<td>' . $row['temp_address'] . '</td>';
		echo '<td>' . $row['phone_no'] . '</td>';
	} 

	// close table>
	echo "</table>";
	  
	  
?>

</body>
</html>	