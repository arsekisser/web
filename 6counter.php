<?php
echo "<h2> refresh page</h2>";
$name="counter.txt";
$file=fopen($name,"r");
$hits=fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file=fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
echo "Total number of views are:".$hits[0];
?>