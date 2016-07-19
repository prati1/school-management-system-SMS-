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
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" rel="stylesheet"/>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
  <div class="row">
	<div class="input-field col s12">
      <input value="<?php echo $std_id; ?>" id="studentid" type="text" class="validate">
      <label class="active" for="studentid">Registration Number:*</label>
    </div>  <div class="row">
	<div class="input-field col s4">
      <input value="<?php echo $first; ?>" id="firstname" type="text" class="validate">
      <label class="active" for="firstname">Registration Number:*</label>
    </div>
 <div class="input-field col s4">
      <input value="<?php echo $middle; ?>" id="middlename" type="text" class="validate">
      <label class="active" for="middlename">Middle Name:</label>
    </div>
	<div class="input-field col s4">
      <input value="<?php echo $last; ?>" id="lastname" type="text" class="validate">
      <label class="active" for="lastname">Last Name:</label>
    </div>
	<div class="input-field col s4">
      <input value="<?php echo $gender; ?>" id="gender" type="text" class="validate">
      <label class="active" for="gender">Gender:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $date_of_admi; ?>" id="admissiondate" type="date" class="validate">
      <label class="active" for="admissiondate">Date of Admission:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $DOBa; ?>" id="DOBad" type="text" class="validate">
      <label class="active" for="DOBad">Date of Birth(AD):*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $DOBb; ?>" id="DOBbs" type="text" class="validate">
      <label class="active" for="DOBbs">Date of Birth(BS):</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_email; ?>" id="studentemail" type="text" class="validate">
      <label class="active" for="studentemail">Email ID</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $adm_standard; ?>" id="admstandard" type="text" class="validate">
      <label class="active" for="admstandard">Admitted Standard:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $Roll; ?>" id="rollno" type="text" class="validate">
      <label class="active" for="rollno">Roll No.:*</label>
    </div>
	<p>Temporary Address</p>
	<div class="input-field col s12">
      <input value="<?php echo $std_temp_street; ?>" id="stdtempstreet" type="text" class="validate">
      <label class="active" for="stdtempstreet">Street:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_temp_ward; ?>" id="stdtempward" type="text" class="validate">
      <label class="active" for="stdtempward">Ward:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_temp_vdc; ?>" id="stdtempvdc" type="text" class="validate">
      <label class="active" for="stdtempvdc">VDC/Municipality:</label>
    </div><div class="input-field col s12">
      <input value="<?php echo $std_temp_district; ?>" id="stdtempdistrict" type="text" class="validate">
      <label class="active" for="stdtempdistrict">District:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_temp_zone; ?>" id="stdtempzone" type="text" class="validate">
      <label class="active" for="stdtempzone">Zone:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_temp_country; ?>" id="stdtempcountry" type="text" class="validate">
      <label class="active" for="stdtempcountry">Country:</label>
    </div>
	<p>Permanent Address</p>
	<div class="input-field col s12">
      <input value="<?php echo $std_perm_street; ?>" id="stdpermstreet" type="text" class="validate">
      <label class="active" for="stdpermstreet">Street:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_perm_ward; ?>" id="stdpermward" type="text" class="validate">
      <label class="active" for="stdpermward">Ward:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_perm_vdc; ?>" id="stdpermvdc" type="text" class="validate">
      <label class="active" for="stdpermvdc">VDC/Municipality:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_perm_district; ?>" id="stdpermdistrict" type="text" class="validate">
      <label class="active" for="stdpermdistrict">District:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_perm_zone; ?>" id="stdpermzone" type="text" class="validate">
      <label class="active" for="stdpermzone">Zone:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $std_perm_country; ?>" id="stdpermcountry" type="text" class="validate">
      <label class="active" for="stdpermcountry">Country:</label>
    </div>
<p>GUARDIAN INFORMATION</p>
<div class="input-field col s12">
      <input value="<?php echo $guardian_id; ?>" id="guardianid" type="text" class="validate">
      <label class="active" for="guardianid">Guardian ID:*</label>
    </div>
	<div class="input-field col s4">
      <input value="<?php echo $gfirst; ?>" id="gfirstname" type="text" class="validate">
      <label class="active" for="gfirstname">First Name:*</label>
    </div>
	<div class="input-field col s4">
      <input value="<?php echo $gmiddle; ?>" id="gmiddlename" type="text" class="validate">
      <label class="active" for="gmiddlename">Middle Name:</label>
    </div>
	<div class="input-field col s4">
      <input value="<?php echo $glast; ?>" id="glastname" type="text" class="validate">
      <label class="active" for="glastname">Last Name:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $phone; ?>" id="phone" type="text" class="validate">
      <label class="active" for="phone">Phone Number:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $relation; ?>" id="relation" type="text" class="validate">
      <label class="active" for="relation">Relation:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $gemail; ?>" id="guardianemail" type="text" class="validate">
      <label class="active" for="guardianemail">Email ID:</label>
    </div>
 <p>Address</p>
	<div class="input-field col s12">
      <input value="<?php echo $guardian_street; ?>" id="guardianstreet" type="text" class="validate">
      <label class="active" for="guardianstreet">Street:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $guardian_ward; ?>" id="guardianward" type="text" class="validate">
      <label class="active" for="guardianward">Ward:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $guardian_vdc; ?>" id="guardianvdc" type="text" class="validate">
      <label class="active" for="guardianvdc">VDC/Municipality:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $guardian_district; ?>" id="guardiandistrict" type="text" class="validate">
      <label class="active" for="guardiandistrict">District:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $guardian_zone; ?>" id="guardianzone" type="text" class="validate">
      <label class="active" for="guardianzone">Zone:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $guardian_country; ?>" id="guardiancountry" type="text" class="validate">
      <label class="active" for="guardiancountry">Country:</label>
    </div>
  </div>
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
 //if (is_numeric($_POST['student_id']))
 //{
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
	
 
 
 
 
 
 
 $studentid = $_GET['student_id'];
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
 
  mysql_query("UPDATE sms.student SET student_id='$studentid',first_name='$firstname',middle_name='$middlename',last_name='$lastname',gender='$gender',date_of_admission='$date_of_admission',DOBad='$DOBad',DOBbs='$DOBbs',email_id='$std_email',admitted_std='$adm_standard',student_roll='$roll_no',
 address_temp_street='$std_temp_street', address_temp_ward='$std_temp_ward',address_temp_vdcmun='$std_temp_vdc',address_temp_district='$std_temp_district',address_temp_zone='$std_temp_zone',address_temp_country='$std_temp_country',address_perm_street='$std_perm_street', 
 address_perm_ward='$std_perm_ward',address_perm_vdcmun='$std_perm_vdc',address_perm_district='$std_perm_district',address_perm_zone='$std_perm_zone',
 address_perm_country='$std_perm_country' WHERE student_id='$studentid'") 
  //VALUES
 //('$studentid','$firstname', '$middlename','$lastname','$gender','$date_of_admission','$DOBad','$DOBbs','$std_email','$adm_standard', '$roll_no',
 //'$std_temp_street','$std_temp_ward','$std_temp_vdc','$std_temp_district','$std_temp_zone','$std_temp_country','$std_perm_street','$std_perm_ward',
 //'$std_perm_vdc','$std_perm_district','$std_perm_zone','$std_perm_country')")
 or die(mysql_error());
 
 mysql_query("UPDATE sms.guardian SET guardian_id='$guardianid',gfirst_name='$gfirstname',gmiddle_name='$gmiddlename',glast_name='$glastname',phone_no='$phone',
 relation='$relation',email_id='$guardianemail',address_street='$guardian_street',address_ward='$guardian_ward',address_vdcmun='$guardian_vdc',
 address_district='$guardian_district',address_zone='$guardian_zone',address_country='$guardian_country' WHERE student_id='$studentid'")
// VALUES
 //('$guardianid','$gfirstname','$gmiddlename','$glastname','$phone','$relation','$guardianemail','$guardian_street','$guardian_ward','$guardian_vdc',
 //'$guardian_district','$guardian_zone','$guardian_country','$studentid')")
 or die(mysql_error());
 
 // once saved, redirect back to the view page
 header("Location: admin.php"); 
 }
// }
 //else
 //{
 // if the 'id' isn't valid, display an error
 //echo 'Error!';
 //}
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['student_id']) && is_numeric($_GET['student_id']) && $_GET['student_id'] > 0)
 {
 // query db
 $std_id = $_GET['student_id'];
 $result = mysql_query("SELECT *, g.email_id as gemail FROM sms.student s,sms.guardian g WHERE s.student_id=$std_id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $firstname = $row['first_name'];
 $middlename=$row['middle_name'];
 $lastname = $row['last_name'];
 $gender = $row['gender'];
 $date_of_admission = $row['date_of_admission'];
 $DOBad = $row['DOBad'];
 $DOBbs = $row['DOBbs'];
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
 	$guardianid = $row['guardian_id'];
	$gfirstname = $row['gfirst_name'];
	$gmiddlename = $row['gmiddle_name'];
	$glastname = $row['glast_name'];
	$phone = $row['phone_no'];
	$relation = $row['relation'];
	$guardianemail = $row['gemail'];
	$guardian_street = $row['address_street'];
	$guardian_ward = $row['address_ward'];
	$guardian_vdc = $row['address_vdcmun'];
	$guardian_district = $row['address_district'];
	$guardian_zone = $row['address_zone'];
	$guardian_country = $row['address_country'];
 
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