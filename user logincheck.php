<?php
include("dbconnect.php");
session_start();

if (isset($_SESSION['username'])) 
{
header('Location: userlogin.html');
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username=mysql_real_escape_string($_POST['name']);
	$password=mysql_real_escape_string($_POST['pass']);
 	$sql="SELECT * FROM userlogin WHERE username='$username' and password='$password'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
		if($count==1)
		{
		$_SESSION['logged']=true;
			$_SESSION['username']=$username;
			$_SESSION['loginid']=$row['loginid'];
			header("location: left2.html");
			exit;
		}
		else
		{
		$_SESSION['logged']=false;
			echo"Invalid User Name or Password";
			header("location: userlogin.html");
			exit;
		}
}
?>
