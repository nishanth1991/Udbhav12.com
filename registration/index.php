<?php
session_start();
unset($_SESSION['admin']); 
unset($_SESSION['times']);
unset($_SESSION['modify']);
setcookie("user", $_POST['user_name'], time()+3600);

if(isset($_POST['login']))
{
$con=mysql_connect("localhost","root","");
//if(!$con) { die " sorryyy "; }
 $database=mysql_select_db("udbhav12_msrit",$con);
if($database)
{
 $user=mysql_real_escape_string($_POST['user_name']); $pass=mysql_real_escape_string($_POST['password']); 
//echo $_POST['user_name']."\n".$_POST['password'];
 $sql="select * from user_login where user_name='$user' and password='$pass'";
 $result=mysql_query($sql);
 $row=mysql_fetch_assoc($result);
  //echo $row['flag'];
 $rows= mysql_num_rows($result);
  if($rows==1 && $row['flag']==1) {
  $_SESSION['admin']=time()+(120*60);
   header("location:second.php"); }
 else { 
   header("location:index1.php");  }
} 
else 
echo "<h1> ERROR IN DB CONNECTIVITY </h2>";
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> User </title>

<script type="text/javascript">

function checkForm(form)
  {
    if(form.user_name.value == "") {
      alert("Error: Username cannot be blank!");
      form.user_name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user_name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user_name.focus();
      return false;
    }

    if(form.password.value == "") 
	{
        alert("Error: Password cannnot be blank");
        form.password.focus();
        return false;
    }
      
  }





</script>

<script language="JavaScript1.2">


var highlightcolor="#0066FF"

var ns6=document.getElementById&&!document.all
var previous=''
var eventobj

//Regular expression to highlight only form elements
var intended=/INPUT|TEXTAREA|SELECT|OPTION/

//Function to check whether element clicked is form element
function checkel(which){
if (which.style&&intended.test(which.tagName)){
if (ns6&&eventobj.nodeType==3)
eventobj=eventobj.parentNode.parentNode
return true
}
else
return false
}

//Function to highlight form element
function highlight(e){
eventobj=ns6? e.target : event.srcElement
if (previous!=''){
if (checkel(previous))
previous.style.backgroundColor=''
previous=eventobj
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
}
else{
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
previous=eventobj
}
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



</head>

<body bgcolor="#000000" onload="is_loaded();">



<br /><br /><br /><br /><br />

<center><strong> <h2 align="center"><font color="#0066FF"  face="Century Gothic"> ONLINE REGISTRATION </font> </h2></strong></center>
<br /><br /><br /><br /><br /><br />
<table height="100" width="500" border="0" align="center">
<tr align="center"> <td align="right"> <font size="+1" color="#FFFFFF" face="Century Gothic">COLLEGE ID &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;</font></td> 
<td align="left"><form name="first" method="post" onsubmit="return checkForm(first);" action="index.php" > 
<input type="text" name="user_name" maxlength="10"  onKeyUp="highlight(event)" onClick="highlight(event)"/> </td> </tr>
<tr align="center"><td align="center" colspan="2"><div id="tex"></div></td></tr> 
<tr align="center"> <td align="right"> <font size="+1" color="#FFFFFF" face="Century Gothic">&nbsp; PASSWORD &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;</font></td> 
<td align="left"> <input type="password" name="password" maxlength="15" onKeyUp="highlight(event)" onClick="highlight(event)"/> </td> </tr>
<tr align="center"> <td align="right"><br /><br /> <input type="submit"  value=" LOGIN " name="login"/> </td> <td align="left"><br /><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value=" RESET " /> </td> </tr> </form>
<tr align="center"> <td align="center" colspan="2"> <font color="#FF0000" face="Century Gothic"><B>LOGIN HAS BLOCKED</B></font></td></tr> 
<tr align="center"> <td align="center" colspan="2"> <font color="#FF0000" face="Century Gothic"><B>THANK YOU FOR ALL</B></font></td></tr> 
</table>

</body>
</html>

