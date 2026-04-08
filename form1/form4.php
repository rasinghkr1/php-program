<html>
<head>
<title>Form</title>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" >

<p><h1>my form </h1></p>
FIRST Name
       <input type = "Text" name = "finame"   /><br><br>
LAST NAME
	<input type = "text" name = "laname"  /><br><br>
	<input type= "submit" name="submit" value="CLICK ME">
</form>


<?php


if($_SERVER["REQUEST_METHOD"]=="POST" )
{
$name= $_POST["finame"];
$lname= $_POST["laname"];

echo "<br>Your name is ".$name ."  ". $lname;
}
?>


</body>
</html>