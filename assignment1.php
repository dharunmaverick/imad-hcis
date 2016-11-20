<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-addnew']))
{
  $loginid= mysql_real_escape_string($_POST['loginid']);
 $traineename = mysql_real_escape_string($_POST['traineename']);
  $courseno = mysql_real_escape_string($_POST['courseno']);
  $trainername = mysql_real_escape_string($_POST['trainername']);
 $Task = mysql_real_escape_string($_POST['Task']);
 $status = mysql_real_escape_string($_POST['status']);
 
 if(mysql_query("INSERT INTO assignments(loginid,traineename,courseno,trainername,Task,status) VALUES('$loginid','$traineename','$courseno','$trainername','$Task','$status')"))
 {
  ?>
        <script>alert('successfully Added');</script>
        <?php
	
 }
 else
 {
  ?>
        <script>alert('error while adding...');</script>
        <?php
	
 }
}
?>
