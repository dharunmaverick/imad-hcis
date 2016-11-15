<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-addnew']))
{
  $courseno= mysql_real_escape_string($_POST['courseno']);
 $coursetitle = mysql_real_escape_string($_POST['coursetitle']);
  $duration = mysql_real_escape_string($_POST['duration']);
 $trainingmaterial = mysql_real_escape_string($_POST['trainingmaterial']);
 if(mysql_query("INSERT INTO courses(courseno,coursetitle,duration,trainingmaterial) VALUES('$courseno','$coursetitle','$duration','$trainingmaterial')"))
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
