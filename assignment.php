<?php

include_once 'dbconnect.php';
session_start();
$trainerlogin=$_SESSION['trainerlogin'];
$result = mysql_query("SELECT * FROM assignments where trainername='$trainerlogin'");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<h1>Assignment Log</h1>";
echo "<table border='1'><tr>";
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td><b>{$field->name}</b></td>";
}
echo "</tr>\n";


while($query2=mysql_fetch_array($result))
{
echo "<tr><td>".$query2['loginid']."</td>";
echo "<td>".$query2['traineename']."</td>";
echo "<td>".$query2['courseno']."</td>";
echo "<td>".$query2['trainername']."</td>";
echo "<td>".$query2['Task']."</td>";
echo "<td>".$query2['status']."</td>";
"</tr>";
}

mysql_free_result($result);
?>
</style>

</body></html>