<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/
 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($std_id,$standard_id,$eng,$nep,$math,$comp,$soc,$enve,$sci,$error)
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
<p>STUDENT INFO</p>
 <div class="row">
	<div class="input-field col s12">
      <input value="<?php echo $std_id; ?>" id="studentid" type="text" class="validate">
      <label class="active" for="studentid">Registration Number:*</label>
    </div>
	 
	<div class="input-field col s12">
      <input value="<?php echo $standard_id; ?>" id="standardid" type="text" class="validate">
      <label class="active" for="standardid">Standard:*</label>

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
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 //if (is_numeric($_POST['student_id']))
 //{
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
$studentid = $_GET['student_id'];
$standardid = mysql_real_escape_string($standardid);
$english = mysql_real_escape_string($english);
$nepali = mysql_real_escape_string($nepali);
$maths = mysql_real_escape_string($maths);
$science = mysql_real_escape_string($science);
$enve = mysql_real_escape_string($enve);
$social = mysql_real_escape_string($social);
$computer = mysql_real_escape_string($computer);
 
 // check that firstname/lastname fields are both filled in
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
mysql_query("UPDATE sms.marks1 SET  student_id='$studentid',standard_id='$standardid',English='$english',Nepali='$nepali',Maths='$maths',Computer='$computer',Social='$social',ENVE
='$enve',Science='$science' WHERE student_id='$studentid'")
or die(mysql_error());
// once saved, redirect back to the view page
header("Location: exam.php");
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
 $result = mysql_query("SELECT * FROM sms.marks s WHERE s.student_id=$std_id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
  $studentid = $row['studentid'];
$standardid = $row['standardid'];
$english = $row['english'];
$nepali = $row['nepali'];
$maths = $row['maths'];
$science = $row['science'];
$enve = $row['enve'];
$social = $row['social'];
$computer = $row['computer'];
 // show form
 renderForm($std_id,$standard_id,$eng,$nep,$math,$comp,$soc,$enve,$sci,'');
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