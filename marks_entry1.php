<?php
/* 
 marks_entry1.php
 Allows user to enter new marks for student for first term
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
  <strong>Registration Number: *</strong> <input type="text" name="studentid" value="<?php echo $std_id; ?>" /><br/>
 <strong>Standard: *</strong> <input type="text" name="standardid" value="<?php echo $standard_id; ?>" /><br/>
 <p>Marks</p>
	  <strong>English: </strong> <input type="text" name="english" value="<?php echo $eng; ?>" /><br/>
	   <strong>Nepali: </strong> <input type="text" name="nepali" value="<?php echo $nep; ?>" /><br/>
	    <strong>Mathematics: </strong> <input type="text" name="maths" value="<?php echo $math; ?>" /><br/>
		 <strong>Science: </strong> <input type="text" name="science" value="<?php echo $sci; ?>" /><br/>
		  <strong>Environment and Population Education: </strong> <input type="text" name="enve" value="<?php echo $enve; ?>" /><br/>
		 
	  <strong>Social Studies: </strong> <input type="text" name="social" value="<?php echo $soc; ?>" /><br/>
	   <strong>Computer Science: </strong> <input type="text" name="computer" value="<?php echo $comp; ?>" /><br/>
		   
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
 
 mysql_query("INSERT into sms.marks1(student_id,standard_id,English,Nepali,Maths,Computer,Social,ENVE,Science) VALUES
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