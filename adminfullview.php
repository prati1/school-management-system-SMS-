
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
	 
	 $id=$_GET['student_id'];
	 
	// get results from database
	$result = mysql_query("SELECT s.student_id,CONCAT(first_name, ' ',middle_name,' ', last_name) As Name,CONCAT(gfirst_name, ' ',gmiddle_name,' ', glast_name) As gName,
	gender, DOBad, date_of_admission, student_roll, YEAR(CURDATE()) - YEAR(DOBad) AS age, phone_no,CONCAT(address_temp_street,'-',address_temp_ward,',',address_temp_vdcmun,',',address_temp_district,',',address_temp_zone,',',address_temp_country) as temp_address,
	DOBbs,s.email_id AS semail,admitted_std,CONCAT(address_perm_street,'-',address_perm_ward,',',address_perm_vdcmun,',',address_perm_district,',',address_perm_zone,',',address_perm_country) as perm_address,guardian_id,
	relation,g.email_id AS gemail,CONCAT(address_street,'-',address_ward,',',address_vdcmun,',',address_district,',',address_zone,',',address_country) as guardian_address
	FROM sms.student s, sms.guardian g WHERE s.student_id=g.student_id and g.student_id=$id") 
		or die(mysql_error());  
		
		
		
		
		
		
	
	// display data in table
	echo "<p><b>Student Info</b>";
while($row = mysql_fetch_array( $result )) {
	echo "<table border='1' cellpadding='10'>";
	echo "<tr>";
	echo '<th>Registration No.</th>';
	echo '<td>' . $row['student_id'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Roll No.</th>';
	echo '<td>' . $row['student_roll'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Name</th>';
	echo '<td>' . $row['Name'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Gender</th>';
	echo '<td>' . $row['gender'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Date Of Admission</th>';
	echo '<td>' . $row['date_of_admission'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Date Of Birth(AD)</th>';
	echo '<td>' . $row['DOBad'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Date of Birth(BS)</th>';
	echo '<td>' . $row['DOBbs'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Admitted Standard</th>';
	echo '<td>' . $row['admitted_std'] . '</td>';
	echo "</tr>";
	
		echo "<tr>";
	echo '<th>Temporary Address</th>';
	echo '<td>' . $row['temp_address'] . '</td>';
	echo "</tr>";
		echo "<tr>";
	echo '<th>Permanent Address</th>';
	echo '<td>' . $row['perm_address'] . '</td>';
	echo "</tr>";	
	echo "<tr>";
	echo '<th>Email id</th>';
	echo '<td>' . $row['semail'] . '</td>';
	echo "</tr>";
	

	
	/*
	echo "<tr><th>Name</th></tr>";
	echo "<tr><th>Guardian Name</th><tr>";
	echo "<tr><th>Gender</th><tr>";
	echo "<tr><th>Date of Admission</th><tr>";
	echo "<tr><th>Date of Birth</th><tr>";
	echo "<tr><th>Roll No</th><tr>";
	echo "<tr><th>Temporary Address</th><tr>";
	echo "<tr><th>Phone No</th><tr>";
	*/




	// close table>
	echo "</table>";
	
	echo "<p><b>Guardian Info</b>";
	echo "<table border='1' cellpadding='10'>";
	 	echo "<tr>";
	echo '<th>ID</th>';
	echo '<td>' . $row['guardian_id'] . '</td>';
	echo "</tr>"; 
		echo "<tr>";
	echo '<th>Name</th>';
	echo '<td>' . $row['gName'] . '</td>';
	echo "</tr>";	
	echo "<tr>";
	echo '<th>Address</th>';
	echo '<td>' . $row['guardian_address'] . '</td>';
	echo "</tr>";	
	
		echo "<tr>";
	echo '<th>Relation</th>';
	echo '<td>' . $row['relation'] . '</td>';
	echo "</tr>";
	echo "<tr>";
	echo '<th>Phone No.</th>';
	echo '<td>' . $row['phone_no'] . '</td>';
	echo "</tr>";

	echo "<tr>";
	echo '<th>Email id</th>';
	echo '<td>' . $row['gemail'] . '</td>';
	echo "</tr>";

	
	// close table>
	echo "</table>";
}
	  
?>

</body>
</html>	
