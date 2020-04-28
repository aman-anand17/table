<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body style=" background: #cc0909; color: #ffffff;">
<h1 style="margin:20px auto;font-size: 4.5rem; color: #ffffff; text-align: center;">Enter a number to print the table</h1>
<div style="text-align: center; font-size: 2rem;">
	<center>
			<form method="post" action="table.php">
		<table style="font-size: 4rem; text-align: center;">
			<tr>
				<td>	<input type="number" name="n" required autofocus >
	</td><td><input type="submit"></td>
			</tr>
		</table>

</form>
<br>

<?php

$n= $_POST['n'];

for($i=1;$i<=10;$i++)
{
	$r= $n * $i ;
	echo "$n * $i =  $r <br>" ;
}

?>
	</center>

</div>
</body>
</html>