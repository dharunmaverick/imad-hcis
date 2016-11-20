<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-addnew']))
{
  $traineeno= mysql_real_escape_string($_POST['traineeno']);
 $traineename = mysql_real_escape_string($_POST['traineename']);
 $trainername = mysql_real_escape_string($_POST['trainername']);
  $attendancepercent = mysql_real_escape_string($_POST['attendancepercent']);
 $present= mysql_real_escape_string($_POST['present']);
 
 if(mysql_query("INSERT INTO trainingattendance(traineeno,traineename,trainername,attendancepercent,present) VALUES('$traineeno','$traineename','$trainername','$attendancepercent','$present')"))
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
