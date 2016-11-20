<?php
include("dbconnect.php");
session_start();

if (isset($_SESSION['tllog'])) 
{
header('Location: home1.html');
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$tllog=mysql_real_escape_string($_POST['tllog']);
	$tlpassword=mysql_real_escape_string($_POST['tlpassword']);
 	$sql="SELECT * FROM tllogin WHERE tllog='$tllog' and tlpassword='$tlpassword'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
		if($count==1)
		{
		$_SESSION['logged']=true;
			$_SESSION['tllog']=$tllog;
			header("location: home1.html");
			exit;
		}
		else
		{
		$_SESSION['logged']=false;
			echo"Invalid User Name or Password";
			header("location: home.html");
			exit;
		}
}
?>
