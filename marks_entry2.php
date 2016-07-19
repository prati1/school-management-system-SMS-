<?php
/* 
 marks_entry2.php
 Allows user to enter new marks for student for second term
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($std_id,$standard_id,$eng,$nep,$math,$comp,$soc,$enve,$sci,$error)
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
 <title>New Record for Marks</title>
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
 <div>
 <p>STUDENT INFO</p>
 <div class="row">
	<div class="input-field col s12">
      <input value="<?php echo $std_id; ?>" id="studentid" type="text" class="validate">
      <label class="active" for="studentid">Registration Number:*</label>
    </div>
	 
	<div class="input-field col s12">
      <input value="<?php echo $standard_id_id; ?>" id="standardid" type="text" class="validate">
      <label class="active" for="standardid">Standard:*</label>
    </div>
 <p>Marks</p>
<div class="row">
	<div class="input-field col s12">
      <input value="<?php echo $eng; ?>" id="english" type="text" class="validate">
      <label class="active" for="englishish">English:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $nep; ?>" id="nepali" type="text" class="validate">
      <label class="active" for="nepali">Nepali:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $math; ?>" id="maths" type="text" class="validate">
      <label class="active" for="maths">Mathematics:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $sci; ?>" id="science" type="text" class="validate">
      <label class="active" for="science">Science:*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $enve; ?>" id="enve" type="text" class="validate">
      <label class="active" for="enve">Environment and Population:*</label>
    </div>
<div class="input-field col s12">
      <input value="<?php echo $soc; ?>" id="social" type="text" class="validate">
      <label class="active" for="social">Social Studies*</label>
    </div>
	<div class="input-field col s12">
      <input value="<?php echo $comp; ?>" id="computer" type="text" class="validate">
      <label class="active" for="computer">Registration Number:*</label>
    </div>
		 
	   </div>
		   
 <p>* required</p>
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
	$standardid = $_POST['standardid'];
	$english = $_POST['english'];
	$nepali = $_POST['nepali'];
	$maths = $_POST['maths'];
	$science = $_POST['science'];
	$enve = $_POST['enve'];
	$social = $_POST['social'];
	$computer = $_POST['computer'];
	
				
	
 
 $studentid = mysql_real_escape_string($studentid);
 $standardid = mysql_real_escape_string($standardid);
 $english = mysql_real_escape_string($english);
 $nepali = mysql_real_escape_string($nepali);
 $maths = mysql_real_escape_string($maths);
 $science = mysql_real_escape_string($science);
 $enve = mysql_real_escape_string($enve);
 $social = mysql_real_escape_string($social);
 $computer = mysql_real_escape_string($computer);
 
 // check to make sure both fields are entered
 if ($studentid == '' || $standardid == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($studentid,$standardid,$engish,$nepali,$maths,$computer,$social,$enve,$science,$error);
 }
 else
 {
 // save the data to the database
 //mysql_query("INSERT student SET firstname='$firstname',middlename='$middlename', lastname='$lastname', gender='$gender',date_of_admission='$date_of_admission',DOBad='$DOB',student_roll='$roll_no' ")
 //or die(mysql_error()); 
 
 mysql_query("INSERT into sms.marks2(student_id,standard_id,English,Nepali,Maths,Computer,Social,ENVE,Science) VALUES
 ('$studentid','$standardid','$english','$nepali','$maths','$computer','$social','$enve','$science')")
 or die(mysql_error());
 
 // once saved, redirect back to the view page
 header("Location: exam.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','');
 }
?>