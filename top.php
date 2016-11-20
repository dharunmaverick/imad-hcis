<html>
<head>
<h1><center>HUMAN CAPITAL INFORMATION SYSTEM</center></h1>
<body>
<?php
session_start();
?>
<div align="left">
<a href="home.html" target="_top">
home
</a>
</div>
<div align="right">
<b>ADMIN&nbsp<?php
 echo $_SESSION['adminname'];?></font></b></div>
 <a href="logout2.php" target="_top">logout</a>
</body>
 </head>
</html>