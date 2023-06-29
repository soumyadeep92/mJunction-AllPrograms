<html>
<body>
<form method="get">
Enter the number:<input type="text" name="demo">
<button type="submit">check</button>
</form>
<?php
if($_GET)
{
	$x=$_GET['demo'];
	$y=$x;
	$fact=1;
	while($y>0)
	{
		$fact=$fact*$y;
		$y=$y-1;
	}
	echo $fact;
}
?>
</body>
</html>