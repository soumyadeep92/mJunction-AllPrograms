<html>
<body>
<?php		
if($_POST)
{
$x=$_POST['fnum'];		
$y=$_POST['snum'];				
$sum=$x+$y;		 
echo "Result:<input type='text' value='$sum'/>";			
}
?>
	
<body>
<form method="post">
Enter first number <input type="text" name="fnum"/><hr/>
Enter second number <input type="text" name="snum"/><hr/>	   		   
<input type="submit"  name="add" value="ADD"/>
</form>
</body>
</html>