<?php
/* 
 newreg.php
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($first, $middle,$last,$gender,$date_of_admi,$DOB, $Roll, $error)
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
 <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $first; ?>" /><br/>
 <strong>Middle Name:</strong> <input type="text" name="middlename" value="<?php echo $middle; ?>" /><br/>
 <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $last; ?>" /><br/>
  <strong>Gender: *</strong> <input type="text" name="gender" value="<?php echo $gender; ?>" /><br/>
   <strong>Date of Admission: </strong> <input type="date" name="admissiondate" value="<?php echo $date_of_admi; ?>" /><br/>
    <strong>Date of Birth: </strong> <input type="date" name="DOB" value="<?php echo $DOB; ?>" /><br/>
	 <strong>Roll No: *</strong> <input type="number" name="rollno" value="<?php echo $Roll; ?>" /><br/>
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
  $firstname = $_POST['firstname'];
 $middlename = $_POST['middlename'];
 $lastname = $_POST['lastname'];
 $gender = $_POST['gender'];
 $date_of_admission = $_POST['admissiondate'];
 $DOBad = $_POST['DOB'];
 $roll_no = $_POST['rollno'];
 

 $firstname = mysql_real_escape_string($firstname);

 $middlename = mysql_real_escape_string($middlename);
 
 $lastname = mysql_real_escape_string($lastname);

 $gender = mysql_real_escape_string($gender);

 $date_of_admission = mysql_real_escape_string($date_of_admission);

 $DOBad = mysql_real_escape_string($DOBad);

 $roll_no = mysql_real_escape_string($roll_no);
 
 // check to make sure both fields are entered
 if ($firstname == '' || $lastname == '' || $gender =='' ||  $roll_no =='')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($firstname, $middlename,$lastname,$gender,$date_of_admission,$DOBad, $roll_no, $error);
 }
 else
 {
 // save the data to the database
 //mysql_query("INSERT student SET firstname='$firstname',middlename='$middlename', lastname='$lastname', gender='$gender',date_of_admission='$date_of_admission',DOBad='$DOB',student_roll='$roll_no' ")
 //or die(mysql_error()); 
 
 mysql_query("INSERT into sms.student(first_name,middle_name,last_name,gender,date_of_admission,DOBad,student_roll) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$date_of_admission', '$DOBad', '$roll_no')")
 or die(mysql_error());
 // once saved, redirect back to the view page
 header("Location: admin.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','');
 }
?>