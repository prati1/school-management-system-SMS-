<?php
/* 
 newreg.php
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($std_id,$first, $middle,$last,$gender,$date_of_admi,$DOBa,$DOBb,$std_email,$adm_standard, $Roll,$std_temp_street,$std_temp_ward,$std_temp_vdc,$std_temp_district,
 $std_temp_zone,$std_temp_country,$std_perm_street,$std_perm_ward,$std_perm_vdc,$std_perm_district,$std_perm_zone,$std_perm_country,$guardian_id,$gfirst,$gmiddle,$glast,$phone,$relation,$gemail,
 $guardian_street,$guardian_ward,$guardian_vdc,$guardian_district,$guardian_zone,$guardian_country,$error)
 {
 ?>
 <html>
 <style type="text/css">
 label{
 	float: left;
 	width: 200px;
 	text-align: right;
 	padding-right: 15px;

 	margin-top: 12px;
 	clear: left;
}
input, textarea {margin-top: 12px;}
#regisform {
	background-color: #CFF;
	width: 80%;

}
#submitbutton {
	margin-left: 150px;
	padding: 15px;

}
</style>
 <head>
 <title>New Record</title>
 <link
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" rel="stylesheet"/>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
 <?php
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">REGISTRATION OF STUDENT INFORMATION</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="admin.php">Admin</a></li>
		<li class="active"><a href="newreg.php">Registration</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </nav>


 
 <form action="" method="post">

  <div class="row">
	<div class="input-field col s12">
      <input value="<?php echo $std_id; ?>" id="studentid" type="text" class="validate">
      <label class="active" for="studentid">Registration Number:*</label>
    </div>
    <div class="input-field col s4">
      <input value="<?php echo $first; ?>" id="firstname" type="text" class="validate">
      <label class="active" for="firstname">First Name:</label>
    </div>
<div class="input-field col s4">
      <input value="<?php echo $middle; ?>" id="middlename" type="text" class="validate">
      <label class="active" for="middlename">Middle Name:</label>
    </div>
<div class="input-field col s4">
      <input value="<?php echo $last; ?>" id="lastname" type="text" class="validate">
      <label class="active" for="lastname">Last Name:</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $date_of_admi; ?>" id="admissiondate" type="text" class="validate">
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
    </div>
	<div class="input-field col s12">
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
		   
 <p>										* required</p>

  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
   <!-- <i class="material-icons right">send</i>-->
  </button>
        
 <input type="submit" name="submit" value="SUBMIT">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('config.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
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
	
				
	

 

 $studentid = mysql_real_escape_string($studentid);
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
 
 // check to make sure both fields are entered
 if ($firstname == '' || $lastname == '' || $gender =='' ||  $roll_no =='' || $date_of_admission =='' || $DOBad == '' || $adm_standard == '' || $roll_no == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($studentid,$firstname, $middlename,$lastname,$gender,$date_of_admission,$DOBad,$DOBbs,$std_email,$adm_standard, $roll_no,$std_temp_street,$std_temp_ward,$std_temp_vdc,$std_temp_district,
 $std_temp_zone,$std_temp_country,$std_perm_street,$std_perm_ward,$std_perm_vdc,$std_perm_district,$std_perm_zone,$std_perm_country,$guardianid,$gfirstname,$middlename,$glastname,
 $phone,$relation,$guardianemail,$guardian_street,$guardian_ward,$guardian_vdc,$guardian_district,$guardian_zone,$guardian_country,$error);
 }
 else
 {
 // save the data to the database
 //mysql_query("INSERT student SET firstname='$firstname',middlename='$middlename', lastname='$lastname', gender='$gender',date_of_admission='$date_of_admission',DOBad='$DOB',student_roll='$roll_no' ")
 //or die(mysql_error()); 
 
 mysql_query("INSERT into sms.student(student_id,first_name,middle_name,last_name,gender,date_of_admission,DOBad,DOBbs,email_id,admitted_std,student_roll,
 address_temp_street, address_temp_ward,address_temp_vdcmun,address_temp_district,address_temp_zone,address_temp_country,address_perm_street, address_perm_ward,address_perm_vdcmun,address_perm_district,address_perm_zone,address_perm_country) VALUES
 ('$studentid','$firstname', '$middlename','$lastname','$gender','$date_of_admission','$DOBad','$DOBbs','$std_email','$adm_standard', '$roll_no',
 '$std_temp_street','$std_temp_ward','$std_temp_vdc','$std_temp_district','$std_temp_zone','$std_temp_country','$std_perm_street','$std_perm_ward','$std_perm_vdc','$std_perm_district','$std_perm_zone','$std_perm_country')")
 or die(mysql_error());
 
 mysql_query("INSERT into sms.guardian(guardian_id,gfirst_name,gmiddle_name,glast_name,phone_no,relation,email_id,address_street,address_ward,address_vdcmun,address_district,address_zone,address_country,student_id) VALUES
 ('$guardianid','$gfirstname','$gmiddlename','$glastname','$phone','$relation','$guardianemail','$guardian_street','$guardian_ward','$guardian_vdc','$guardian_district','$guardian_zone','$guardian_country','$studentid')")
 or die(mysql_error());
 
 // once saved, redirect back to the view page
 header("Location: admin.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
 }
?>
