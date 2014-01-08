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
<title>REGISTERATION PAGE</title>
<?php 
$con=mysql_connect("localhost","root","");
//if(!$con) { die " sorryyy "; }
 $database=mysql_select_db("udbhav12_msrit",$con);
if($database) { 
 $cookie=$_COOKIE['user'];
 $sql="select college from user_login where user_name= '$cookie'";//.$_COOKIE['user'];
 if(!mysql_query($sql)) { die (" Sorry in fetching the college "); }
 
 $result=mysql_query($sql);
 
 $ass=mysql_fetch_assoc($result);
 
 $college= $ass['college'];
 //sql1="select * from `$college` ";
 $res= mysql_query("select * from `$college`");
 $result1= mysql_num_rows($res);
 //echo $result1;
 //$ass1=mysql_fetch_assoc($result1);
  }
?> 
<script type="text/javascript">
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press


}
}

function handleChange(input) {
    if (input.value <= 0) input.value = 1;
    if (input.value > 45-<?php echo $result1; ?> ) input.value = 45-<?php echo $result1; ?>;
  }
  
  
  
  function validation()
{
        var chks = document.getElementsByName('name[]');//here rr[] is the name of the textbox
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
		
		var chks1 = document.getElementsByName('usn[]');//here rr[] is the name of the textbox
 
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
  
  
  function confirmSubmit()
{
var agree=confirm("Do you wish to continue?");
if (agree)
	return true ;
else
	return false ;
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

<body bgcolor="#000000" alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF" onload="is_loaded();">


<table height="10" width="50" align="right"> <tr align="right"> <td align="right"><font face="Century Gothic" ><a href="signout.php" style="text-decoration: none"><h3> Logout </h3></a></td></tr></table>
<br /><br /><br /><br />
<form name="n" method="post" action="add.php" >
<center> <strong><font  face="Century Gothic" color="#00CCFF" size="+1">USN should be unique, if duplicate entry is there then your data will not be inserted into the database </font></strong></center>
<center> <strong><font color="#FF0000"><font face="Century Gothic" color="#00CCFF" size="+1"> Enter the number of participants (including Accompanist, Coordinator and Participants) &nbsp;&nbsp;&nbsp;&nbsp; 
<input type="text" name="number" size="3" onkeypress="return numbersonly(event)" onchange="handleChange(this);" maxlength="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="SUBMIT" onClick="return confirmSubmit()"/></strong></center> 
</form>

<br /><br /><br />
<?php
  if(isset($_POST['submit']))
  {
	
?>	
     <table height="100%" width="100%" align="center" border="1" bordercolor="#FFFFFF">
	 
	 <tr><td colspan="5"> </td>
	     <td colspan="8" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> MUSIC </b></font></td>
		 <td colspan="2" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> DANCE </b></font></td>
		 <td colspan="3" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> LITERARY </b></font></td>
		 <td colspan="4" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> THEATRE </b></font></td>
     	 <td colspan="7" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> FINE ARTS </b></font></td>
	     <td colspan="8" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> NON-COMP </b></font></td>
	 </tr>
     <tr><th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;</font></th>
     <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;USN&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;GENDER&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;DESIGNATION&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Vocal Solo<br /> &nbsp;&nbsp;&nbsp(Hindustani/Carnatic)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Instrumental solo<br /> &nbsp;&nbsp;&nbsp(Percussion)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Instrumental solo<br /> &nbsp;&nbsp;&nbsp(Non-Percussion)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Light Vocal<br />&nbsp;&nbsp;&nbsp(Indian)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Western Vocal &nbsp;&nbsp;&nbspsolo&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Group song &nbsp;&nbsp;&nbsp(Indian)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Group Songs &nbsp;&nbsp;&nbsp(Western)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Folk &nbsp;&nbsp;&nbspOrchestra&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Folk/Tribal Dance&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Dance&nbsp;&nbsp;&nbsp (Indian)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Quiz&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Elocution&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Debate&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;One Act &nbsp;&nbsp;&nbspPlay&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Skit&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Mime&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Mimicry&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;On the spot &nbsp;&nbsp;&nbsppainting&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Collage&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Poster &nbsp;&nbsp;&nbspMaking&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Clay &nbsp;&nbsp;&nbspmodeling&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Cartooning&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Rangoli&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Spot &nbsp;&nbsp;&nbspPhotography&nbsp;&nbsp;&nbsp;</font></th>
	 
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Western and<br />&nbsp;&nbsp;&nbsp;Contemporary Group&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Quiz<br />&nbsp;&nbsp;&nbsp;(SPENT)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;JAM<br />&nbsp;&nbsp;&nbsp;(English)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;JAM<br />&nbsp;&nbsp;&nbsp;(Kannada)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Dumb<br />&nbsp;&nbsp;&nbsp;Charades&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Personality&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Short <br />&nbsp;&nbsp;&nbsp;Films&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;Cooking&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" size="+1" face="Century Gothic">&nbsp;&nbsp;&nbsp;T-SHIRT&nbsp;&nbsp;&nbsp;</font></th></font>
</tr>
<form name="final" action="add_final.php" method="post" onsubmit="return validation();">
 <?php    $i=1;
	  while($i<=$_POST['number'])
	  {
	  
	   echo "<tr> <th> <font color='ffffff' size='+1'>".$i++."</font></th>";?>	   
	   <td><input type="text" name="name[]" /></td>
   	   <td><input type="text" name="usn[]" /></td>
   	   <td align="center"><select name="gender[]">
	          <option value="Select">--SELECT--</option>
              <option value="M">M</option>
              <option value="F">F</option>
            </select>
       </td>
	   <td align="center"><select name="Designation[]">
	   	      <option value="Select">--SELECT--</option>
              <option value="A">Accompanist</option>
              <option value="P">Participant</option>
			  <option value="S">Staff Co-ordinator</option>
            <option value="c">Student Co-ordinator</option>
            </select>
       </td> 
	   
	   
	   
	   
	   
	   <td align="center"><select name="EVENT1[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   
	   <td align="center"><select name="EVENT2[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   
	   <td align="center"><select name="EVENT3[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT4[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT5[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT6[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT7[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT8[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT9[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT10[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT11[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT12[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT13[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT14[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT15[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT16[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT17[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT18[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT19[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT20[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT21[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT22[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT23[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT24[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	  
	   <td align="center"><select name="EVENT26[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT27[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT28[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT29[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT30[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT31[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT32[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	   <td align="center"><select name="EVENT33[]">
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
            </select>
       </td> 
	  
	
	     <td align="center"><select name="Shirts[]">
	   	      <option value="Select">--SELECT--</option>
              <option value="Y">YES</option>
              <option value="N">NO</option>
            </select>
       </td>
<?php	   echo "</tr>"; }?>
<tr> <td colspan="4" align="center" border="0"> <input type="submit" value=" REGISTER " ></td>
     <td colspan="4" align="center" border="0"> <input type="reset" value=" REFRESH " onClick="return confirmSubmit()"></td>
</tr>

</table>
<br><br><br>

<table height="100" width="1000" align="center">
<tr>
<td align="left">
<font color="#FFFFFF" size="+1">1.</font><font color="#00adef"  face="Century Gothic"><b>If the total number of events in which college participating less than or exactly 10 then the fee is Rs. 2500.</b></font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">2.</font><font color="#00adef"  face="Century Gothic"><b>If the total number of events in which college participating more than 10 then the fee is Rs. 5000.</b></font>
</td>
</tr>



<tr>
<td align="left">
<font color="#FFFFFF" size="+1">3.</font><font color="#00adef"  face="Century Gothic"><b>Fee to be paid in form of dd in favour of "MSRIT UDBHAV"</b></font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">4.</font><font color="#00adef"  face="Century Gothic"><b>Caution Deposit of 1000 separately paid in cash on arrival.</b></font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">5.</font><font color="#00adef"  face="Century Gothic"><b>The cost of T Shirt and the design will be put up on the website before 2 weeks of the fest</b></font>
</td>
</tr>
</table>
<?php  
	   
}	   
?>	  


</body>
</html>
