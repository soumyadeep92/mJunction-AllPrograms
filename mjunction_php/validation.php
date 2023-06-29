<html>
<body>

<?php
$name=$email=$gender=$comment=$website="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=test_input($_POST["name"]);
	$email=test_input($_POST["email"]);
	$website=test_input($_POST["website"]);
	$comment=test_input($_POST["comment"]);
	$gender=test_input($_POST["gender"]);
}
function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="name">
<br><br>
Email:<input type="text" name="email">
<br><br>
Website:<input type="text" name="website">
<br><br>
Comment:<input type="text" name="comment">
<br><br>
Gender:<input type="text" name="gender">
<br><br>
<input type="submit" name="submit" value="Submit">
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>