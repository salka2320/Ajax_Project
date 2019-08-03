<?php
$state=$_GET['state'];
$c1=array('agra','kanpur','varanasi');
$c2=array('patna','champaran');
$c3=array('bhopal','indore','jabalpur','ratlam');
if($state=="Uttar Pradesh")
{
foreach($c1 as $c)
  echo"<option>$c</option>";	
}
else if($state=="Bihar")
{
	foreach($c2 as $c)
  echo"<option>$c</option>";
}
else if($state=="Madhya Pradesh")
{
foreach($c3 as $c)
  echo"<option>$c</option>";	
}
else
	echo "<option>First Select State</option>";

?>
