<?php
// db properties
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sms3';

// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ("I cannot connect to the database because: " . mysql_error());
mysql_select_db ($dbname) or die ("I cannot select the database '$dbname' because: " . mysql_error());

if(isset($_GET['delnews']))
{
$query = mysql_query("DELETE FROM student WHERE student_id = '{$_GET['delnews']}'")or die('Error : ' . mysql_error());
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
}
?>

