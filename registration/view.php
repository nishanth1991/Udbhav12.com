<?php
session_start();
$now = time();
if((!isset($_SESSION['admin'])) || (!isset($_COOKIE['user'])) || ($_SESSION['admin'] < $now))
header("Location:error.php");
if((!isset($_SESSION['admin'])) || (!isset($_COOKIE['user'])))
header("Location:error.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Records</title>




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


</head>

<body bgcolor="#000000" alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF">
<table height="10" width="50" align="right"> <tr align="right"> <td align="right"><a href="signout.php" style="text-decoration: none"><h3><font face="Century Gothic"> Logout </h3></a></td></tr></table>
<br /><br /><br /><br />

<center> <strong><font size="+1" color="#FF0000"><font face="Century Gothic" color="#00CCFF"> THE ENTERED DETAILS ARE </strong></center> 

<br /><br /><br />


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
 
 //echo $college;
 
 $sql1="select * from `udbhav12_msrit`.`$college`";
 
 if(mysql_query($sql1)) {  
 
 $result=mysql_query($sql1);
 
 
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
     <tr><th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;</font></th>
     <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;USN&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;GENDER&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;DESIGNATION&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Vocal Solo<br /> &nbsp;&nbsp;&nbsp(Hindustani/Carnatic)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Instrumental solo<br /> &nbsp;&nbsp;&nbsp(Percussion)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Instrumental solo<br /> &nbsp;&nbsp;&nbsp(Non-Percussion)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Light Vocal<br />&nbsp;&nbsp;&nbsp(Indian)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Western Vocal &nbsp;&nbsp;&nbspsolo&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Group song &nbsp;&nbsp;&nbsp(Indian)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Group Songs &nbsp;&nbsp;&nbsp(Western)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Folk &nbsp;&nbsp;&nbspOrchestra&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Folk/Tribal Dance&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Classical Dance&nbsp;&nbsp;&nbsp (Indian)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Quiz&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Elocution&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Debate&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;One Act &nbsp;&nbsp;&nbspPlay&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Skit&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Mime&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Mimicry&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;On the spot &nbsp;&nbsp;&nbsppainting&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Collage&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Poster &nbsp;&nbsp;&nbspMaking&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Clay &nbsp;&nbsp;&nbspmodeling&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Cartooning&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Rangoli&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Spot &nbsp;&nbsp;&nbspPhotography&nbsp;&nbsp;&nbsp;</font></th>
	 
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Western and<br />&nbsp;&nbsp;&nbsp;Contemporary Group&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Quiz<br />&nbsp;&nbsp;&nbsp;(SPENT)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;JAM<br />&nbsp;&nbsp;&nbsp;(English)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;JAM<br />&nbsp;&nbsp;&nbsp;(Kannada)&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Dumb<br />&nbsp;&nbsp;&nbsp;Charades&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Personality&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Short <br />&nbsp;&nbsp;&nbsp;Films&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;Cooking&nbsp;&nbsp;&nbsp;</font></th>
	 <th><font color="#FF6600" face="Century Gothic">&nbsp;&nbsp;&nbsp;T-SHIRT&nbsp;&nbsp;&nbsp;</font></th></font>
</tr>

<?php
$i=1;
while($ass=mysql_fetch_assoc($result))
 {
  
 
	 echo "<tr> <th align='center'><font color='#FFFFFF' face='Century Gothic'>".$i++."</font></th>"; ?>	   
	   <td align="center"><font color='#00ccff' face='Century Gothic'><?php echo $ass['name']; ?></td>
   	   <td align="center"><font color='#00ccff' face='Century Gothic'><?php echo $ass['usn']; ?></td>
   	    <td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['gender']=='M') echo "MALE"; 
		else if($ass['gender']=='F') echo "FEMALE"; else echo "SELECT"; ?></td>
		
		<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['designation']=='A') echo "Accompanist"; 
		else if($ass['designation']=='P') echo "Participant"; else if($ass['designation']=='c') echo "Student Co-ordinator"; else echo "Staff Co-ordinator"; ?></td>
	   	
      <td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Classical_Vocal_Solo_(Hindustani/Carnatic)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
	 <td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Classical_Instrumental_solo_(Percussion)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Classical_Instrumental_solo_(Non-Percussion)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Light_Vocal_(Indian)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Western_Vocal_solo']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Group_song_(Indian)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Group_Songs_(Western)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Folk_Orchestra']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Folk/Tribal_Dance']=='Y')  echo "YES"; 
		 else echo "NO"; ?></td>
	   			<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Classical_Dance_(Indian)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Quiz']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Elocution']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Debate']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['One_Act_Play']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Skit']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Mime']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Mimicry']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['On_the_spot_painting']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Collage']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Poster_Making']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Clay_modeling']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Cartooning']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Rangoli']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Spot_Photography']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Western_and_Contemporary_Group']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Quiz_(spent)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Jam(english)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Jam(kannada)']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Dumb_charades']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Personality']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Short_films']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
<td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['Cooking']=='Y') echo "YES"; 
		 else echo "NO"; ?></td>
	   			
				
	   <td align="center"><font color='#00ccff' face='Century Gothic'><?php if($ass['t_shirt']=='Y') echo "YES"; 
		 else if($ass['t_shirt']=='N') echo "NO"; else echo "Select"; ?></td>
	   			
	   

<?php
}
 
 } 
 
 else
   echo "<h1><strong><center> <b><font color='#ff0000'> NO RECORS </font></b></center></strong></h1>";
 
 }
?> 


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
<font color="#FFFFFF" size="+1">4.</font><font color="#00adef"  face="Century Gothic"><b>Caution: Deposit of 1000 separately paid in cash on arrival.</b></font>
</td>
</tr>

<tr>
<td align="left">
<font color="#FFFFFF" size="+1">5.</font><font color="#00adef"  face="Century Gothic"><b>The cost of T Shirt and the design will be put up on the website before 2 weeks of the fest</b></font>
</td>
</tr>
</table>
	  



</body>
</html>
