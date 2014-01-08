<?php
session_start();
$now = time();
if((!isset($_SESSION['admin'])) || (!isset($_COOKIE['user'])) || ($_SESSION['admin'] < $now))
header("Location:error.php");
unset($_SESSION['name']); 

$q=($_GET["q"]);
//echo $q;
$_SESSION['name']=$q;
//if(strlen($q)==1)
//$q=$q."%";
//else
//$q=$q;
$con=mysql_connect("localhost","root","");
//if(!$con) { die " sorryyy "; }
 $database=mysql_select_db("udbhav12_msrit",$con);

$cookie=$_COOKIE['user'];
 $sql="select college from user_login where user_name= '$cookie'";//.$_COOKIE['user'];
 if(!mysql_query($sql)) { die (" Sorry in fetching the college "); }
 
 $result=mysql_query($sql);
 
 $ass=mysql_fetch_assoc($result);
 
 $college= $ass['college'];

$sql="SELECT * FROM `$college` WHERE usn = '$q' ";//SELECT * FROM `cbitk` WHERE usn='1ck10cs026'
//SELECT * FROM `msrit` where usn like '1ms%'
$_SESSION['name']=$q;
$result = mysql_query($sql);
if($result)
 {
$res=mysql_num_rows($result);
//echo $res;
if($res!=0)
{
echo ' <form id="modify" action="getUser_1.php" method="post" onsubmit="return validation();" > 
      <table height="100%" width="100%" align="center" border="1">
     <tr><td colspan="4"> </td>
	     <td colspan="8" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> MUSIC </b></font></td>
		 <td colspan="2" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> DANCE </b></font></td>
		 <td colspan="3" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> LITERARY </b></font></td>
		 <td colspan="4" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> THEATRE </b></font></td>
     	 <td colspan="7" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> FINE ARTS </b></font></td>
	     <td colspan="8" align="center"><font size="+3" color="#FF6600" face="Century Gothic"><b> NON-COMP </b></font></td>
	 </tr>
     <tr>
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
</tr>';
$i=1;

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  //echo "<th align='center'>".$i++."<th>"; 
  ?>
  
  <td> <input type="text" value="<?php echo $row['name']; ?>" name="name"> </td>
  <td> <input type="text" value="<?php echo $row['usn']; ?>" name="usn"> </td><br>
 <td align="center"><select name="gender">
	         <?php if($row['gender']=='M') { ?>
              <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
              <option value="F">F</option>
			  <?php } 
			  else { ?>
			   <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
              <option value="M">M</option>
			  <?php }?>
            </select>
       </td>
	   <td align="center"><select name="Designation">
	          <?php if($row['designation']=='A') { ?>
              <option value="<?php echo $row['designation']; ?>">Accompanist</option>
              <option value="P">Participant</option>
			  <option value="C">Student Co-ordinator</option>
                         <option value="s"> Staff Co-ordinator </option>
			  <?php } 
			  else if($row['designation']=='P') { ?>
			   <option value="<?php echo $row['designation']; ?>">Participant</option>
              <option value="A">Accompanist</option>
               <option value="C">Student Co-ordinator</option>
<option value="s"> Staff Co-ordinator </option>
			  <?php } else  if ($row['designation']=='c') { ?>
	   
	   
	   	       <option value="<?php echo $row['designation']; ?>">Student Co-ordinator</option>
              <option value="A">Accompanist</option>
              <option value="P">Participant</option>
<option value="s"> Staff Co-ordinator </option>
			  <?php }  else { ?>


 <option value="<?php echo $row['designation']; ?>">Staff Co-ordinator</option>
              <option value="A">Accompanist</option>
              <option value="P">Participant</option>
<option value="c"> Student Co-ordinator </option>
	<?php } ?>		

  

            </select>
       </td> 
	   
	   
	   
	   
	   
	   <td align="center"><select name="EVENT1">
	   <?php if($row['Classical_Vocal_Solo_(Hindustani/Carnatic)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			   <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   
	   <td align="center"><select name="EVENT2">
	   	      <?php if($row['Classical_Instrumental_solo_(Percussion)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			   <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   
	   <td align="center"><select name="EVENT3">
	   	    <?php if($row['Classical_Instrumental_solo_(Non-Percussion)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			   <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT4">
	   	      <?php if($row['Light_Vocal_(Indian)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			   <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT5">
	   	     <?php if($row['Western_Vocal_solo']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			   <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT6">
	   	      <?php if($row['Group_song_(Indian)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			   <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT7">
	   	     <?php if($row['Group_Songs_(Western)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT8">
	   	    <?php if($row['Folk_Orchestra']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT9">
	   	  <?php if($row['Folk/Tribal_Dance']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT10">
	   	   <?php if($row['Classical_Dance_(Indian)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT11">
	   	     <?php if($row['Quiz']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT12">
	   	     <?php if($row['Elocution']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT13">
	   	     <?php if($row['Debate']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT14">
	   	     <?php if($row['One_Act_Play']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT15">
	   	     <?php if($row['Skit']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT16">
	   	     <?php if($row['Mime']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>
            </select>
       </td> 
	   <td align="center"><select name="EVENT17">
              <?php if($row['Mimicry']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT18">
<?php if($row['On_the_spot_painting']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT19">
<?php if($row['Collage']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT20">
<?php if($row['Poster_Making']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT21">
<?php if($row['Clay_modeling']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT22">
<?php if($row['Cartooning']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT23">
<?php if($row['Rangoli']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT24">
<?php if($row['Spot_Photography']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT26">
<?php if($row['Western_and_Contemporary_Group']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT27">
<?php if($row['Quiz_(spent)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT28">
<?php if($row['Jam(english)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT29">
<?php if($row['Jam(kannada)']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT30">
<?php if($row['Dumb_charades']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT31">
<?php if($row['Personality']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT32">
<?php if($row['Short_films']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	   <td align="center"><select name="EVENT33">
<?php if($row['Cooking']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td> 
	  
	
	     <td align="center"><select name="Shirts">
<?php if($row['t_shirt']=='N') { ?>
	   	      <option value="N">NO</option>
              <option value="Y">YES</option>
			  <?php } 
			  else { ?>
			  <option value="Y">YES</option>
              <option value="N">NO</option>
			  <?php } ?>            </select>
       </td>
	   </tr>
<?php } ?>	 
 
    <tr> <td colspan="10" align="center" >
	 <input type="submit" value=" MODIFY " id="modify_1"> </td></tr>
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
 </form>

<?php  

}
else
           echo "<font color='#FF0000'><center> <h1> THE SEARCHING RECORD IS NOT FOUND IN OUR DATABASE </h1></center></font> ";
}


else { echo "<font color='#FF0000'><center> <h1> TABLE DOESNOT EXISTS </h1></center></font> "; }


mysql_close($con);
?>
