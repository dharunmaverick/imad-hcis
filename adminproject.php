<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-addnew']))
{

  $traineeno= mysql_real_escape_string($_POST['traineeno']);
    $traineename= mysql_real_escape_string($_POST['traineename']);
	  $teamname= mysql_real_escape_string($_POST['teamname']);
   $projname= mysql_real_escape_string($_POST['projname']);
 $projid = mysql_real_escape_string($_POST['projid']);
 $projdescription = mysql_real_escape_string($_POST['projdescription']);
   $deadline= mysql_real_escape_string($_POST['deadline']);
 $teamleader = mysql_real_escape_string($_POST['teamleader']);

 if(mysql_query("INSERT INTO projects(traineeno,traineename,teamname,projname,projid,projdescription,deadline,teamleader) VALUES('$traineeno','$traineename','$teamname','$projname','$projid','$projdescription','$deadline','$teamleader')"))
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
