<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(7,8,9),array(4,5,6),array(1,2,3));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
echo "<br> The first array is:<br>";
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo " ".$a[$i][$j];
	echo "<br>";
}

echo "<br> The second array is:<br>";
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo " ".$b[$i][$j];
	echo "<br>";
}

echo "<br> The transpose of first array is:<br>";
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo " ".$a[$j][$i];
	echo "<br>";
}

echo "<br> The sum of  array is:<br>";
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo "  ".$a[$i][$j]+$b[$i][$j]." ";
	echo "<br>";
}

echo "<br> THe product is : <br>";
$res=[];
for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++){
		$res[$i][$j]=0;
		for($k=0;$k<3;$k++)
	$res[$i][$j]+=$a[$i][$k]*$b[$k][$j];
}
}
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo " ".$res[$i][$j];
	echo "<br>";
}
?>

