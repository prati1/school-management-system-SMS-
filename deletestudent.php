<?php
/* 
 deletestudent.php
 Deletes a specific student details
*/

 // connect to the database
 include('config.php');
 
// sql to delete a record

//if (isset($_POST['student_id'])) {
$id=$_GET['student_id'];
$result=mysql_query ("DELETE FROM sms.student WHERE student_id='$id'") or die(mysql_error());

  if($result){
        echo "Deleted Successfully";
        echo "<BR>";
          header("location: admin.php");
    }else {
        echo "ERROR";
    }
    ?> 
<?php
mysql_close();
 
?>