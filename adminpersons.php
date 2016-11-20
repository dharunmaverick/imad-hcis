<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-addnew']))
{
  $loginid= mysql_real_escape_string($_POST['loginid']);
 $firstname = mysql_real_escape_string($_POST['firstname']);
  $lastname = mysql_real_escape_string($_POST['lastname']);
 $mailid = mysql_real_escape_string($_POST['mailid']);
 $mobno = mysql_real_escape_string($_POST['mobno']);
 $degree = mysql_real_escape_string($_POST['degree']);
 $branch = mysql_real_escape_string($_POST['branch']);
 $location = mysql_real_escape_string($_POST['location']);
 if(mysql_query("INSERT INTO persons(loginid,firstname,lastname,mailid,mobno,degree,branch,location) VALUES('$loginid','$firstname','$lastname','$mailid','$mobno','$degree','$branch','$location')"))
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
