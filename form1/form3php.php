<html>
<head>
<title>Form</title>
<body>
<form action="form3php.php" method="POST" >

<p><h1>my form php access</h1></p>
Name
       <input type = "Text" name = "myname"  id = "one" /><br><br>
Email
	<input type = "text" name = "myemail"  id = "two" /><br><br>
Website
	<input type = "text" name = "myebsite"  id = "three" /><br><br>
Comment
	<textarea  name = "comment" rows= "5"  cols="40" > </textarea><br><br>

Gender
	<input type = "radio" name = "r" value="male"> male
	<input type = "radio" name = "r" value="female"> female <br><br>

<input type= "submit" name="submit" value="SUBMIT">
</form>

<?php


if($_SERVER["REQUEST_METHOD"]=="POST" )
{
$name= $_POST["myname"];
$email= $_POST["myemail"];
$website= $_POST["myebsite"];
$cmt= $_POST["comment"];
$gender= $_POST["r"];


echo "<br> Name=".$name;
echo "<br>Email=".$email;
echo "<br>Website=".$website;
echo "<br> comment=".$cmt;
echo "<br> Gender=".$gender;
}
?>


</body>
</html>

