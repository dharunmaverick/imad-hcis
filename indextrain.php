 <html>
 <head>
 <title>TRAINING BASED HUMAN CAPITAL INFORMATION SYSTEM</title>
 </head>
 <body>
 <body style="background-color:darkblue">
<style>
#header {
    background-color:black;
    color:yellow;
    text-align:center;
    padding:5px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.active {
    background-color: #4CAF50;
}

<frameset rows="25%,*">
<frame src="std.jpg">
</frameset>
</style>
</head>
</body>

<body>
<?php
session_start();
?>
<ul>
  <li><a class="active" href="home.html"target="_top">HOME</a></li>
  
  <li><a href="logintrain.html" target="_blank">ADMIN</a></li>

  <li><a href="trainerlogin.html" target="_blank">TRAINER</a></li>
  <li style="float:right;list-style-type:none;">
    <font color="red">
	<?php 
	if(isset($_SESSION['logged'])&&$_SESSION['logged']==true){ 
	echo'Welcome&nbsp';
	
        echo $_SESSION['username'];
		echo '<li><a href="logout1.php"target="_top"><span>LOGOUT</span></a></li>';
        }
    else {
        echo '<li><a href="userlogin.html"target="home"><span>TRAINEE</span></a></li>';
    }
    
?>
</font>
<li><a href="tllogin.html"target="_blank">TEAMLEADER</a></li>
	<li><a href="about.html" target="home">ABOUT</a></li>
  </li>
  
</ul>
</div>

<form>
<div id="header">
<h1><b><center> GLOSYS HUMAN CAPITAL INFORMATION SYSTEM </b></center></h1>
</div >

</form>
</body>
</html>
 