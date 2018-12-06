<?php
$states="Mississippi Alabama Texas Massachusetts Kansas";
$res=[];
$states1 = explode(" ",$states);
echo"Original array is <br>";
foreach ( $states1 as $i => $value )
	print("<br> STATES[$i] = $value");

foreach($states1 as $state)
	if(preg_match('/xas$/', ($state)))
		$res[0] = $state;
foreach($states1 as $state)
	if(preg_match('/^k.*s$/i', $state))
		$res[1]=$state;
foreach($states1 as $state)
	if(preg_match('/^M.*s$/', $state))
		$res[2]=$state;
foreach($states1 as $state)
	if(preg_match('/a$/', $state))
		$res[3]=$state;
echo"<br>Resultant array is : <br>";
foreach ( $res as $i => $value )
print("<br> STATES[$i] = $value");
?>