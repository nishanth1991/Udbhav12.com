<?php
$q=mysql_real_escape_string($_GET["q"]);

$con = mysql_connect('localhost', "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("udbhav_12", $con);

$sql="SELECT * FROM user_login WHERE user_name = '".$q."'";

$result = mysql_query($sql);
//$rows=mysql_num_rows($result);
if(!mysql_num_rows($result))
{
 echo " <font color='#FF0000' size='+1'> USER NAME DOESNOT  EXISTS </font> ";
} 
/*echo "<table border='1'>
<tr>
<th>UserName</th>
<th>Password</th>
<th>Rows </th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>".$rows."</td>";
  }
echo "</table>";
*/
mysql_close($con);
?> 