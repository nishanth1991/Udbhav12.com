<?php
session_start();
//$_SESSION['times']+=1;
//$_SESSION['modify']=1;

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




$i=0; 
foreach ($NAME as $value) {
 $i++;
}

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
 

$sql="CREATE TABLE `udbhav12_msrit`.`$college` (`name` VARCHAR(25) NOT NULL, `usn` VARCHAR(25) NOT NULL, `gender` VARCHAR(1) NOT NULL, `designation` VARCHAR(1) NOT NULL, `Classical_Vocal_Solo_(Hindustani/Carnatic)` VARCHAR(3) NOT NULL, `Classical_Instrumental_solo_(Percussion)` VARCHAR(3) NOT NULL, `Classical_Instrumental_solo_(Non-Percussion)` VARCHAR(3) NOT NULL, `Light_Vocal_(Indian)` VARCHAR(3) NOT NULL, `Western_Vocal_solo` VARCHAR(3) NOT NULL, `Group_song_(Indian)` VARCHAR(3) NOT NULL, `Group_Songs_(Western)` VARCHAR(3) NOT NULL, `Folk_Orchestra` VARCHAR(3) NOT NULL, `Folk/Tribal_Dance` VARCHAR(3) NOT NULL, `Classical_Dance_(Indian)` VARCHAR(3) NOT NULL, `Quiz` VARCHAR(3) NOT NULL, `Elocution` VARCHAR(3) NOT NULL, `Debate` VARCHAR(3) NOT NULL, `One_Act_Play` VARCHAR(3) NOT NULL, `Skit` VARCHAR(3) NOT NULL, `Mime` VARCHAR(3) NOT NULL, `Mimicry` VARCHAR(3) NOT NULL, `On_the_spot_painting` VARCHAR(3) NOT NULL, `Collage` VARCHAR(3) NOT NULL, `Poster_Making` VARCHAR(3) NOT NULL, `Clay_modeling` VARCHAR(3) NOT NULL, `Cartooning` VARCHAR(3) NOT NULL, `Rangoli` VARCHAR(3) NOT NULL, `Spot_Photography` VARCHAR(3) NOT NULL,`Western_and_Contemporary_Group` VARCHAR(3) NOT NULL, `Quiz_(spent)` VARCHAR(3) NOT NULL, `Jam(english)` VARCHAR(3) NOT NULL,
`Jam(kannada)` VARCHAR(3) NOT NULL, `Dumb_charades` VARCHAR(3) NOT NULL, `Personality` VARCHAR(3) NOT NULL, `Short_films` VARCHAR(3) NOT NULL, `Cooking` VARCHAR(3) NOT NULL, `t_shirt` VARCHAR(3) NOT NULL, PRIMARY KEY ( `usn` ) )";

if(!mysql_query($sql)) { die (" error in creating the table ".mysql_error()); }

$j=0; 
while($j<$i)

{
 
 //echo $NAME[$j]."      ".$USN[$j]."    ".$GENDER[$j]."    ".$DES[$j]."   ".$EVENT1[$j];
 //echo "<br>";
 $name=$NAME[$j];
 $usn=$USN[$j];
 $sql="insert into `$college` values ('$NAME[$j]','$USN[$j]','$GENDER[$j]','$DES[$j]','$EVENT1[$j]','$EVENT2[$j]','$EVENT3[$j]','$EVENT4[$j]','$EVENT5[$j]','$EVENT6[$j]','$EVENT7[$j]','$EVENT8[$j]','$EVENT9[$j]','$EVENT10[$j]','$EVENT11[$j]','$EVENT12[$j]','$EVENT13[$j]','$EVENT14[$j]','$EVENT15[$j]','$EVENT16[$j]','$EVENT17[$j]','$EVENT18[$j]','$EVENT19[$j]','$EVENT20[$j]','$EVENT21[$j]','$EVENT22[$j]','$EVENT23[$j]','$EVENT24[$j]','$EVENT26[$j]','$EVENT27[$j]','$EVENT28[$j]','$EVENT29[$j]','$EVENT30[$j]','$EVENT31[$j]','$EVENT32[$j]','$EVENT33[$j]','$SHIRT[$j]')";
 if(!mysql_query($sql)) { die(" ERROR IN INSERTION ".mysql_error()); }
 
 $j++;
 
 }
 
}

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


</head>';

echo "<body bgcolor='#000000' > 


<br><br><br><br><br><br>";
echo "<table height='100' width=\"500\" align=\"center\">
<tr>
<td> <font face=\"Century Gothic\" size=\"+2\" color=\"#00CCFF\"> THANK YOU FOR REGISTRING <br /> YOUR PAGE WILL BE REDIRECTED TO MAIN PAGE AFTER 5 SECONDS </font></td></tr></table>";


?>
