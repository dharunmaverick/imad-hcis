<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-addnew']))
{
  $traineeno= mysql_real_escape_string($_POST['traineeno']);
 $traineename = mysql_real_escape_string($_POST['traineename']);
  $courseno = mysql_real_escape_string($_POST['courseno']);
 $coursename = mysql_real_escape_string($_POST['coursetitle']);
 $trainername = mysql_real_escape_string($_POST['trainername']);
 $coursestart = mysql_real_escape_string($_POST['coursestart']);
 $coursefinish = mysql_real_escape_string($_POST['coursefinish']);
 if(mysql_query("INSERT INTO courseallocate(traineeno,traineename,courseno,coursename,trainername,coursestart,courefinish) VALUES('$traineeno','$traineename','$courseno','$coursename','$trainername','$coursestart','$coursefinish')"))
 
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
