<?php
session_start();
$now = time();
if((!isset($_SESSION['admin'])) || (!isset($_COOKIE['user'])) || ($_SESSION['admin'] < $now))
header("Location:error.php");


$con=mysql_connect("localhost","root","");
//if(!$con) { die " sorryyy "; }
 $database=mysql_select_db("udbhav12_msrit",$con);

if($database) { 
 $cookie=$_COOKIE['user'];
 $sql="select college from user_login where user_name= '$cookie'";//.$_COOKIE['user'];
 if(!mysql_query($sql)) { die (" Sorry in fetching the college "); }
 
 $result=mysql_query($sql);
 
 $ass=mysql_fetch_assoc($result);
 $name=$_SESSION['name'];
 $college= $ass['college'];
 $sql="SELECT * FROM `$college` WHERE usn like '$name%' or name like '$name%'";
 $re=mysql_query($sql);
 $ass=mysql_fetch_assoc($re);
 $na=$ass['name']; $us=$ass['usn'];
 $sql="delete from `$college` where name='$na' or usn='$us'";
 if(!mysql_query($sql)) { die (" ERROR IN DELETION ".mysql_error()); }
 
 $NAME=($_POST['name']);
$USN=($_POST['usn']);
$GENDER=$_POST['gender'];
$DES=$_POST['Designation'];
$EVENT1=$_POST['EVENT1'];
$EVENT2=$_POST['EVENT2'];
$EVENT3=$_POST['EVENT3'];
$EVENT4=$_POST['EVENT4'];
$EVENT5=$_POST['EVENT5'];
$EVENT6=$_POST['EVENT6'];
$EVENT7=$_POST['EVENT7'];
$EVENT8=$_POST['EVENT8'];
$EVENT9=$_POST['EVENT9'];
$EVENT10=$_POST['EVENT10'];
$EVENT11=$_POST['EVENT11'];
$EVENT12=$_POST['EVENT12'];
$EVENT13=$_POST['EVENT13'];
$EVENT14=$_POST['EVENT14'];
$EVENT15=$_POST['EVENT15'];
$EVENT16=$_POST['EVENT16'];
$EVENT17=$_POST['EVENT17'];
$EVENT18=$_POST['EVENT18'];
$EVENT19=$_POST['EVENT19'];
$EVENT20=$_POST['EVENT20'];
$EVENT21=$_POST['EVENT21'];
$EVENT22=$_POST['EVENT22'];
$EVENT23=$_POST['EVENT23'];
$EVENT24=$_POST['EVENT24'];

$EVENT26=$_POST['EVENT26'];
$EVENT27=$_POST['EVENT27'];
$EVENT28=$_POST['EVENT28'];
$EVENT29=$_POST['EVENT29'];
$EVENT30=$_POST['EVENT30'];
$EVENT31=$_POST['EVENT31'];
$EVENT32=$_POST['EVENT32'];
$EVENT33=$_POST['EVENT33'];
$SHIRT=$_POST['Shirts'];



$sql="insert into `$college` values ('$NAME','$USN','$GENDER','$DES','$EVENT1','$EVENT2','$EVENT3','$EVENT4','$EVENT5','$EVENT6','$EVENT7','$EVENT8','$EVENT9','$EVENT10','$EVENT11','$EVENT12','$EVENT13','$EVENT14','$EVENT15','$EVENT16','$EVENT17','$EVENT18','$EVENT19','$EVENT20','$EVENT21','$EVENT22','$EVENT23','$EVENT24','$EVENT26','$EVENT27','$EVENT28','$EVENT29','$EVENT30','$EVENT31','$EVENT32','$EVENT33','$SHIRT')";
 if(!mysql_query($sql)) { die(" ERROR IN INSERTION "); }


header("Refresh: 1; URL=second.php");
echo ' <html> <head> <title> REGISTRATION </title>
<link rel="stylesheet" type="text/css" href="bgstretcher.css" />

<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="bgstretcher.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	
        //  Initialize Backgound Stretcher	   
		$("BODY").bgStretcher({
			images: ["xyz.jpg"],
			imageWidth: 1024, 
			imageHeight: 768, 
			});
		
	});
</script> 
<script type="text/javascript" language="javascript">
function is_loaded() { //DOM
if (document.getElementById){
document.getElementById("preloader").style.visibility="hidden";
}else{
if (document.layers){ //NS4
document.preloader.visibility = "hidden";
}
else { //IE4
document.all.preloader.style.visibility = "hidden";
}
}
}
//-->
</script>

</head>';

echo "<body bgcolor='#000000' onload='is_loaded();'>

 <br><br><br><br><br><br>";
echo "<table height='100' width=\"500\" align=\"center\">
<tr>
<td> <font face=\"Century Gothic\" size=\"+2\" color=\"#00CCFF\"> THANK YOU FOR MODIFYING <br /> YOUR PAGE WILL BE REDIRECTED TO MAIN PAGE AFTER 5 SECONDS </font></td></tr></table>";

}	

?>
