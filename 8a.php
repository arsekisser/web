<html>
<head>
<style>
table,td,th{
	background-color:lightgreen;
	border: 1px solid black;
	text-align:right;
	border-collapse:collapse;
}
table{margin:auto;}
</style>
</head>
<body>
<form method="post">
<table>
<caption><h2> simple calculator</h2></caption>
<tr>
<th>Enter number 1:</th> <td><input type='text' name='num1' /></td>
<td rowspan='2'><input type='submit' name='submit' value='calculate' /></td>
</tr>

<tr>
<th>Enter number 2: </th><td><input type='text' name='num2' /> </td></tr>
</form>
<?php
if(isset($_POST['submit']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	if(is_numeric($num1) and is_numeric($num2))
	{
		echo "<tr><th> Addition : </th><td>". ($num1+$num2)."</td></tr>";
		echo "<tr><th> substraction : </th><td>". ($num1-$num2)."</td></tr>";
		echo "<tr><th> multiplication : </th><td>". ($num1*$num2)."</td></tr>";
		echo "<tr><th> division : </th><td>". ($num1/$num2)."</td></tr>";
		echo "</table>";
	}
	else
		echo "<script type='text/javascript'> alert('Enter a valid number');</script>";
	
}
?>
</body>
</html>