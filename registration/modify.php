<?php
session_start();
$now = time();
if((!isset($_SESSION['admin'])) || (!isset($_COOKIE['user'])) || ($_SESSION['admin'] < $now))
header("Location:error.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MODIFY</title>



<script type="text/javascript">


function showU(str)
{
 //alert("im here ");
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>

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

<script type="text/javascript">
 function validation()
{
        var chks = document.getElementsByName('name');//here rr[] is the name of the textbox
        var regexNum = /\d/;
        var regexLetter = /[a-zA-z]+/;
         // if(!regexNum.test(textbox.value) || !regexLetter.test(textbox.value)){
          // alert('Type alphanumeric character');
          // return false;
         // }
        for (var i = 0; i < chks.length; i++)
        {        
        if (chks[i].value=="")
        {
        alert("None of the Text box left blank");
        chks[i].focus();
        return false;            
        }
	     
		 if(!regexLetter.test(chks[i].value))
		 {
           alert('Alphabets only allowed ');
		   chks[i].focus();
           return false;
          }
		 
        }
		
		var chks1 = document.getElementsByName('usn');//here rr[] is the name of the textbox
 
        for (var i = 0; i < chks1.length; i++)
        {        
        if (chks1[i].value=="")
        {
        alert("None of the Text box left blank");
        chks1[i].focus();
        return false;            
        }
		
		
		if(!regexNum.test(chks1[i].value) || !regexLetter.test(chks[i].value)){
           alert('Type alphanumeric character as USN');
		   chks1[i].focus();
           return false;
          }
        }
}
 </script> 

</head>
<body bgcolor="#000000" alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF" onload="is_loaded();">

<table height="10" width="50" align="right"> <tr align="right"> <td align="right"><a href="signout.php" style="text-decoration: none"><h3><font face="Century Gothic"> Logout </h3></td></tr></table>
<br /><br />

<center>
<table height="100%" width="100%" align="center">
<tr><td colspan="2" align="center"> <h3> <font color="#0066CC" face="Century Gothic"> THIS MAY TAKE 10-15 secs TO LOAD THE ACTUAL DATA DUE TO SOME SECURITY REASONS.. SO PLEASE WAIT </font>
<tr align="center"> <td align="right">
<h3> <font color="#0066CC" face="Century Gothic"> SELECT THE USN : </font></h3></td>  
<td align="left">&nbsp; 

<select name='usn' onchange="showU(this.value)">   
<option value="null"> SELECT</option>
<?php 
$con=mysql_connect("localhost","root","");
//if(!$con) { die " sorryyy "; }
 $database=mysql_select_db("udbhav12_msrit",$con);
 
$cookie=$_COOKIE['user'];
 $sql="select college from user_login where user_name= '$cookie'";//.$_COOKIE['user'];
 if(!mysql_query($sql)) { die (" Sorry in fetching the college "); }
 
 $result=mysql_query($sql);
 
 $ass=mysql_fetch_assoc($result);
 
 $college= $ass['college'];
//echo "<font color='#ff000'>".$college."</font>";
$sql="SELECT usn FROM `$college`";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
?>
<option value ="<?php echo $row['usn'] ?>"> <?php echo  $row['usn'] ?> </option>

<?php } ?> 
</select>
</td></tr>
</table>
</center>
<div id="txtHint">  </div>
</script>
</body>
</html>
