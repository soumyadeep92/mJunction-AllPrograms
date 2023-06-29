<!DOCTYPE html>
<html>
<body>
<form method="post">
<input type="number" name="num1" value="<?php echo $num1?>">
<input type="number" name="num2" value="<?php echo $num2?>">
<input type="submit" value="submit">
</form>
<?php
$num1=0;
$num2=0;
$action=0;
if($_POST)
{
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$n=$num1;
	$num1=$num2;
	$num2=$n;
	/*echo "<br>";
	echo $num1;
	echo "<br>";
	echo $num2;*/
}
?>
</body>
</html>