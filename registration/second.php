<?php
session_start();

if($_SESSION['times']>1)
header("location:error.php");
$now = time();
if((!isset($_SESSION['admin'])) || (!isset($_COOKIE['user'])) || ($_SESSION['admin'] < $now))
header("Location:error.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OPERATIONS</title>

<link rel="stylesheet" type="text/css" href="bgstretcher.css" />

<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="bgstretcher.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	
        //  Initialize Backgound Stretcher	   
		$('BODY').bgStretcher({
			images: ['xyz.jpg'],
			imageWidth: 1024, 
			imageHeight: 768, 
			});
		
	});
</script>
<script type="text/javascript" language="javascript">
function is_loaded() { //DOM
if (document.getElementById){
document.getElementById('preloader').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.preloader.visibility = 'hidden';
}
else { //IE4
document.all.preloader.style.visibility = 'hidden';
}
}
}
//-->
</script>


</head>

<body bgcolor="#000000" alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF" onload="is_loaded();">


<table height="100%" width="100%" align="center">
<tr>
<td align="right" colspan="2">
<table height="100" width="50" align="right">
<tr align="right"><td align="right"> <a href="signout.php" style="text-decoration: none"><h3><font face="Century Gothic"> Logout </font></h3></a></td></tr></table>
</td>
</tr>

<tr>
<td align="left">

<table height="150" width="100" align="left">

<?php

$con=mysql_connect("localhost","root","");
//if(!$con) { die " sorryyy "; }
 $database=mysql_select_db("udbhav12_msrit",$con);
if($database)
{
 $cookie=$_COOKIE['user'];
 $sql1="select college from user_login where user_name='$cookie'";
 $result= mysql_query($sql1);
 $ass=mysql_fetch_assoc($result);
 $college= $ass['college'];
 $sql="select * from  `$college`";
 $result = mysql_query("select * from `$college`");
 if(!mysql_query($sql)) { 
?>
<tr align="left" > <td align="center" bgcolor="#0099FF"><br /><a href="register.php" style="text-decoration: none" ><font face="Century Gothic"><b>ONLINE REGISTRATION </b></a></td></tr>
<?php } else if (mysql_num_rows($result)<45){ ?>
 
<tr align="left"> <td align="center" bgcolor="#0099FF"><br /><br /><a href="add.php" style="text-decoration: none" ><font face="Century Gothic"><b>ADD MORE STUDENTS </b></a></td></tr>

<?php } }?>
<tr align="left"> <td align="center" bgcolor="#0099FF"><br /><br /><a href="view.php" style="text-decoration: none" ><font face="Century Gothic"><b>VIEW RECORDS </b></a></td></tr>
<tr align="left"> <td align="center" bgcolor="#0099FF"><br /><br /><a href="modify.php" style="text-decoration: none" ><font face="Century Gothic"><b>MODIFY </b></a></td></tr>

<tr align="left"> <td align="center" bgcolor="#0099FF"><br /><br /><a href="download.zip" style="text-decoration: none" ><font face="Century Gothic"><b>DOWNLOAD </b></a></td></tr>

</table>
</td>


<td align="center" >
<table height="100" width="1000" align="center">
<tr>
<td align="center"><font color="#00adef" face="Century Gothic" size="+1"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to the online registration for Udbhav ? The VTU Fest 2012&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
</tr>
<tr>
<td align="center">
<font color="#00adef"  face="Century Gothic" size="+1"> Please follow these instructions very carefully before starting your registration process:</font></td>
</tr>

<tr>
<td align="center">
<font color="#ff0000"  face="Century Gothic" size="+1"> <b>Please dont try to enter all the student details at a stretch as your session may expire..<b></font></td>
</tr>
<tr>
<td align="center">
<font color="#ff0000"  face="Century Gothic" size="+1"> Better try to go with Firefox or Chrome as there is some problem with IE </font></td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">1.</font><font color="#00adef"  face="Century Gothic"> <b>Online Registration:</b> Clicking on this link will enable you to specify the total number of participants, accompanists and the Team Managers for your college.</font>

</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">2.</font><font color="#00adef"  face="Century Gothic"> Please mention the particulars of each candidate who is registering for the fest as requested by the table. Please note that the maximum number of entering participants, including staff and professional accompanists should not exceed <b>45</b>. The form auto corrects the number if it exceeds 45.</font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">3.</font><font color="#00adef"  face="Century Gothic"> Each entry can be saved, on clicking the <b>?Register?</b> tab. The <b>?Refresh?</b> tab can be used to clear all data entered.</font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">4.</font><font color="#00adef"  face="Century Gothic"> Please ensure that all the data entered is correct before registering.</font>
</td>
</tr>



<tr>
<td align="left">
<font color="#FFFFFF" size="+1">5.</font><font color="#00adef"  face="Century Gothic"> Change the status of the default option under any event or detail to <b>?yes? </b>to confirm participation, for any event, before clicking on the register button.</font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">6.</font><font color="#00adef"  face="Century Gothic">Please scroll till the end of the row to find all details.<b> Enter all the rows.</b>  The data will not be saved unless every text box for each entry is filled. </font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">7.</font><font color="#00adef"  face="Century Gothic">Wait till you are redirected to the home page, and click on <b>?Add more students?</b> if you need to make more entries. All entries will be saved from your previous data entry. </font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">8.</font><font color="#00adef"  face="Century Gothic">Follow the same instructions as mentioned above to register.</font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">9.</font><font color="#00adef"  face="Century Gothic"><b>Modify: </b>This option should be used to change any previously entered data. Search for previous entries based on <b>Name/ USN.</b></font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">10.</font><font color="#00adef"  face="Century Gothic">To load the data, it may take some time to load due to the security reasons. So please wait till it loads. We are not responsible if you have entered any invalid Name or USN. Contact our Online in Charge in this case, at <b>9916519615(Raj)</b></font>
</td>
</tr>



<tr>
<td align="left">
<font color="#FFFFFF" size="+1">11.</font><font color="#00adef"  face="Century Gothic">If you have entered the correct case record for modification, you will be able to modify the contents.</font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">12.</font><font color="#00adef"  face="Century Gothic"><b>Download:</b> This is a mandatory tab. All team managers must download these forms, in a zip file. <b>Every form must be filled in and duly attested by the principal of your institution.</b> Please follow the rules mentioned in the word file for any additional instructions. </font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">13.</font><font color="#00adef"  face="Century Gothic">If you are logging for the second time, then you will be able to add more students only if you haven?t registered more than 45 participants.</font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">14.</font><font color="#00adef"  face="Century Gothic">Please contact us if you have any more queries about registration.</font>
</td>
</tr>


<tr>
<td align="left">
<font color="#FFFFFF" size="+1">15.</font><font color="#00adef"  face="Century Gothic"><b>LAST DATE OF REGISTRATION IS 29<SUP>th</SUP> OF FEB 2012</b></font>
</td>
</tr>



</table>




</td>
</tr>
</table>
</body>
</html>
