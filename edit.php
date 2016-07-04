<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($std_id,$first, $middle,$last,$gender,$date_of_admi,$DOBa,$DOBb,$std_email,$adm_standard, $Roll,$std_temp_street,$std_temp_ward,$std_temp_vdc,$std_temp_district,
 $std_temp_zone,$std_temp_country,$std_perm_street,$std_perm_ward,$std_perm_vdc,$std_perm_district,$std_perm_zone,$std_perm_country,$guardian_id,$gfirst,$gmiddle,$glast,$phone,$relation,$gemail,
 $guardian_street,$guardian_ward,$guardian_vdc,$guardian_district,$guardian_zone,$guardian_country,$error)
 {
 ?>
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>
<p>STUDENT INFORMATION</p>
  <strong>Registration Number: *</strong> <input type="text" name="studentid" value="<?php echo $std_id; ?>" /><br/>
 <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $first; ?>" /><br/>
 <strong>Middle Name:</strong> <input type="text" name="middlename" value="<?php echo $middle; ?>" /><br/>
 <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $last; ?>" /><br/>
  <strong>Gender: *</strong> <input type="text" name="gender" value="<?php echo $gender; ?>" /><br/>
   <strong>Date of Admission: </strong> <input type="date" name="admissiondate" value="<?php echo $date_of_admi; ?>" /><br/>
    <strong>Date of Birth(AD): *</strong> <input type="date" name="DOBad" value="<?php echo $DOBa; ?>" /><br/>
	 <strong>Date of Birth(BS): </strong> <input type="text" name="DOBbs" value="<?php echo $DOBb; ?>" /><br/>
	  <strong>Email ID: </strong> <input type="text" name="studentemail" value="<?php echo $std_email; ?>" /><br/>
	<strong>Admitted Standard: *</strong> <input type="text" name="admstandard" value="<?php echo $adm_standard; ?>" /><br/>
	 <strong>Roll No: *</strong> <input type="number" name="rollno" value="<?php echo $Roll; ?>" /><br/>
	 <p>Temporary Address</p>
	  <strong>Street: </strong> <input type="text" name="stdtempstreet" value="<?php echo $std_temp_street; ?>" /><br/>
	   <strong>Ward: </strong> <input type="text" name="stdtempward" value="<?php echo $std_temp_ward; ?>" /><br/>
	    <strong>VDC/Municipality: </strong> <input type="text" name="stdtempvdc" value="<?php echo $std_temp_vdc; ?>" /><br/>
		 <strong>District: </strong> <input type="text" name="stdtempdistrict" value="<?php echo $std_temp_district; ?>" /><br/>
		  <strong>Zone: </strong> <input type="text" name="stdtempzone" value="<?php echo $std_temp_zone; ?>" /><br/>
		   <strong>Country: </strong> <input type="text" name="stdtempcountry" value="<?php echo $std_temp_country; ?>" /><br/>
		 	 <p>Permanent Address</p>
	  <strong>Street: </strong> <input type="text" name="stdpermstreet" value="<?php echo $std_perm_street; ?>" /><br/>
	   <strong>Ward: </strong> <input type="text" name="stdpermward" value="<?php echo $std_perm_ward; ?>" /><br/>
	    <strong>VDC/Municipality: </strong> <input type="text" name="stdpermvdc" value="<?php echo $std_perm_vdc; ?>" /><br/>
		 <strong>District: </strong> <input type="text" name="stdpermdistrict" value="<?php echo $std_perm_district; ?>" /><br/>
		  <strong>Zone: </strong> <input type="text" name="stdpermzone" value="<?php echo $std_perm_zone; ?>" /><br/>
		   <strong>Country: </strong> <input type="text" name="stdpermcountry" value="<?php echo $std_perm_country; ?>" /><br/>
		   
<p>GUARDIAN INFORMATION</p>
  <strong>Guardian ID: *</strong> <input type="text" name="guardianid" value="<?php echo $guardian_id; ?>" /><br/>
 <strong>First Name: *</strong> <input type="text" name="gfirstname" value="<?php echo $gfirst; ?>" /><br/>
 <strong>Middle Name:</strong> <input type="text" name="gmiddlename" value="<?php echo $gmiddle; ?>" /><br/>
 <strong>Last Name: *</strong> <input type="text" name="glastname" value="<?php echo $glast; ?>" /><br/>
  <strong>Phone Number: *</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" /><br/>
   <strong>Relation: *</strong> <input type="text" name="relation" value="<?php echo $relation; ?>" /><br/>
    <strong>Email ID: </strong> <input type="text" name="guardianemail" value="<?php echo $gemail; ?>" /><br/>
	<p>Address</p>
	<strong>Street: </strong> <input type="text" name="guardianstreet" value="<?php echo $guardian_street; ?>" /><br/>
	   <strong>Ward: </strong> <input type="text" name="guardianward" value="<?php echo $guardian_ward; ?>" /><br/>
	    <strong>VDC/Municipality: </strong> <input type="text" name="guardianvdc" value="<?php echo $guardian_vdc; ?>" /><br/>
		 <strong>District: </strong> <input type="text" name="guardiandistrict" value="<?php echo $guardian_district; ?>" /><br/>
		  <strong>Zone: </strong> <input type="text" name="guardianzone" value="<?php echo $guardian_zone; ?>" /><br/>
		   <strong>Country: </strong> <input type="text" name="guardiancountry" value="<?php echo $guardian_country; ?>" /><br/>
		   
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('config.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['student_id']))
 {
 // get form data, making sure it is valid
 $studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$date_of_admission = $_POST['admissiondate'];
	$DOBad = $_POST['DOBad'];
	$DOBbs = $_POST['DOBbs'];
	$std_email = $_POST['studentemail'];
	$adm_standard = $_POST['admstandard'];
	$roll_no = $_POST['rollno'];
	$std_temp_street = $_POST['stdtempstreet'];
	$std_temp_ward = $_POST['stdtempward'];
	$std_temp_vdc = $_POST['stdtempvdc'];
	$std_temp_district = $_POST['stdtempdistrict'];
	$std_temp_zone = $_POST['stdtempzone'];
	$std_temp_country = $_POST['stdtempcountry'];
	$std_perm_street = $_POST['stdpermstreet'];
	$std_perm_ward = $_POST['stdpermward'];
	$std_perm_vdc = $_POST['stdpermvdc'];
	$std_perm_district = $_POST['stdpermdistrict'];
	$std_perm_zone = $_POST['stdpermzone'];
	$std_perm_country = $_POST['stdpermcountry'];
	
	$guardianid = $_POST['guardianid'];
	$gfirstname = $_POST['gfirstname'];
	$gmiddlename = $_POST['gmiddlename'];
	$glastname = $_POST['glastname'];
	$phone = $_POST['phone'];
	$relation = $_POST['relation'];
	$guardianemail = $_POST['guardianemail'];
	$guardian_street = $_POST['guardianstreet'];
	$guardian_ward = $_POST['guardianward'];
	$guardian_vdc = $_POST['guardianvdc'];
	$guardian_district = $_POST['guardiandistrict'];
	$guardian_zone = $_POST['guardianzone'];
	$guardian_country = $_POST['guardiancountry'];
	
 
 
 
 
 
 
 $std_id = $_POST['student_id'];

 $firstname = mysql_real_escape_string($firstname);
 $middlename = mysql_real_escape_string($middlename);
 $lastname = mysql_real_escape_string($lastname);
 $gender = mysql_real_escape_string($gender);
 $date_of_admission = mysql_real_escape_string($date_of_admission);
 $DOBad = mysql_real_escape_string($DOBad);
 $DOBbs = mysql_real_escape_string($DOBbs);
 $std_email = mysql_real_escape_string($std_email);
 $adm_standard = mysql_real_escape_string($adm_standard);
 $roll_no = mysql_real_escape_string($roll_no);
 $std_temp_street = mysql_real_escape_string($std_temp_street);
	$std_temp_ward = mysql_real_escape_string($std_temp_ward);
	$std_temp_vdc = mysql_real_escape_string($std_temp_vdc);
	$std_temp_district = mysql_real_escape_string($std_temp_district);
	$std_temp_zone = mysql_real_escape_string($std_temp_zone);
	$std_temp_country = mysql_real_escape_string($std_temp_country);
	$std_perm_street = mysql_real_escape_string($std_perm_street);
	$std_perm_ward = mysql_real_escape_string($std_perm_ward);
	$std_perm_vdc = mysql_real_escape_string($std_perm_vdc);
	$std_perm_district = mysql_real_escape_string($std_perm_district);
	$std_perm_zone = mysql_real_escape_string($std_perm_zone);
	$std_perm_country = mysql_real_escape_string($std_perm_country);
	
$guardianid = mysql_real_escape_string($guardianid);
$gfirstname = mysql_real_escape_string($gfirstname);
 $gmiddlename = mysql_real_escape_string($gmiddlename);
 $glastname = mysql_real_escape_string($glastname);
	$phone = mysql_real_escape_string($phone);
	$relation = mysql_real_escape_string($relation);
	$guardainemail = mysql_real_escape_string($guardianemail);
	$guardian_street = mysql_real_escape_string($guardian_street);
	$guardian_ward = mysql_real_escape_string($guardian_ward);
	$guardian_vdc = mysql_real_escape_string($guardian_vdc);
	$guardian_district = mysql_real_escape_string($guardian_district);
	$guardian_zone = mysql_real_escape_string($guardian_zone);
	$guardian_country = mysql_real_escape_string($guardian_country);
 
 // check that firstname/lastname fields are both filled in
 if ($firstname == '' || $lastname == '' || $gender =='' ||  $roll_no =='' || $date_of_admission =='' || $DOBad == '' || $adm_standard == '' || $roll_no == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($firstname, $middlename,$lastname,$gender,$date_of_admission,$DOBad,$DOBbs,$std_email,$adm_standard, $roll_no,$std_temp_street,$std_temp_ward,$std_temp_vdc,$std_temp_district,
 $std_temp_zone,$std_temp_country,$std_perm_street,$std_perm_ward,$std_perm_vdc,$std_perm_district,$std_perm_zone,$std_perm_country,$guardianid,$gfirstname,$middlename,$glastname,
 $phone,$relation,$guardianemail,$guardian_street,$guardian_ward,$guardian_vdc,$guardian_district,$guardian_zone,$guardian_country,$error);
 }
 else
 {
 // save the data to the database
 //mysql_query("UPDATE players SET firstname='$firstname', middlename ='$middlename', lastname='$lastname', gender='$gender', date_of_admission='$date_of_admission', DOBad='$DOBad', email_id='$std_email', admitted_std='$adm_standard', student_roll='$roll_no', address_temp_street='$std_temp_street', address_temp_ward='$std_temp_ward', address_temp_vdcmun='$std_temp_vdc', address_temp_district='$std_temp_district', address_temp_zone='$std_temp_zone', address_temp_country='$std_temp_country', address_perm_street='$std_perm_street',address_perm_ward='$std_perm_ward', address_perm_vdcum='$std_perm_vdcum', address_perm_district='$std_perm_district', address_perm_zone='$std_perm_zone', address_perm_country='$std_perm_country' WHERE studentid='$studentid'")
// or die(mysql_error()); 
 
  mysql_query("UPDATE into sms.student(student_id,first_name,middle_name,last_name,gender,date_of_admission,DOBad,DOBbs,email_id,admitted_std,student_roll,
 address_temp_street, address_temp_ward,address_temp_vdcmun,address_temp_district,address_temp_zone,address_temp_country,address_perm_street, address_perm_ward,address_perm_vdcmun,address_perm_district,address_perm_zone,address_perm_country) VALUES
 ('$studentid','$firstname', '$middlename','$lastname','$gender','$date_of_admission','$DOBad','$DOBbs','$std_email','$adm_standard', '$roll_no',
 '$std_temp_street','$std_temp_ward','$std_temp_vdc','$std_temp_district','$std_temp_zone','$std_temp_country','$std_perm_street','$std_perm_ward','$std_perm_vdc','$std_perm_district','$std_perm_zone','$std_perm_country')")
 or die(mysql_error());
 
 mysql_query("UPDATE into sms.guardian(guardian_id,gfirst_name,gmiddle_name,glast_name,phone_no,relation,email_id,address_street,address_ward,address_vdcmun,address_district,address_zone,address_country,student_id) VALUES
 ('$guardianid','$gfirstname','$gmiddlename','$glastname','$phone','$relation','$guardianemail','$guardian_street','$guardian_ward','$guardian_vdc','$guardian_district','$guardian_zone','$guardian_country','$studentid')")
 or die(mysql_error());
 
 // once saved, redirect back to the view page
 header("Location: admin.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['student_id']) && is_numeric($_GET['student_id']) && $_GET['student_id'] > 0)
 {
 // query db
 $std_id = $_GET['student_id'];
 $result = mysql_query("SELECT * FROM sms.student s,sms.guardian g,sms.administration a WHERE s.student_id=$std_id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $firstname = $row['firstname'];
 $middlename=$row['middlename'];
 $lastname = $row['lastname'];
 $gender = $row['gender'];
 $date_of_admission = $row['date_of_admission'];
 $DOBad = $row['DOBad'];
 $std_email = $row['email_id'];
 $adm_standard = $row['admitted_std'];
 $roll_no = $row['student_roll'];
 $std_temp_street = $row['address_temp_street'];
 $std_temp_ward = $row['address_temp_ward'];
 $std_temp_vdc = $row['address_temp_vdcmun'];
 $std_temp_district = $row['address_temp_district'];
 $std_temp_zone = $row['address_temp_zone'];
 $std_temp_country = $row['address_temp_country'];
 $std_perm_street = $row['address_perm_street'];
 $std_perm_ward = $row['address_perm_ward'];
 $std_perm_vdc = $row['address_perm_vdcmun'];
 $std_perm_district = $row['address_perm_district'];
 $std_perm_zone = $row['address_perm_zone'];
 $std_perm_country = $row['address_perm_country'];

 	$guardianid = $row['guardianid'];
	$gfirstname = $row['gfirstname'];
	$gmiddlename = $row['gmiddlename'];
	$glastname = $row['glastname'];
	$phone = $row['phone'];
	$relation = $row['relation'];
	$guardianemail = $row['guardianemail'];
	$guardian_street = $row['guardianstreet'];
	$guardian_ward = $row['guardianward'];
	$guardian_vdc = $row['guardianvdc'];
	$guardian_district = $row['guardiandistrict'];
	$guardian_zone = $row['guardianzone'];
	$guardian_country = $row['guardiancountry'];

 
 // show form
 renderForm($std_id, $firstname, $middlename, $lastname, $gender, $date_of_admission,$DOBad,$DOBbs,$std_email,$adm_standard, $roll_no,$std_temp_street,$std_temp_ward,$std_temp_vdc,$std_temp_district,
 $std_temp_zone,$std_temp_country,$std_perm_street,$std_perm_ward,$std_perm_vdc,$std_perm_district,$std_perm_zone,$std_perm_country,$guardianid,$gfirstname,$middlename,$glastname,
 $phone,$relation,$guardianemail,$guardian_street,$guardian_ward,$guardian_vdc,$guardian_district,$guardian_zone,$guardian_country,'');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>
