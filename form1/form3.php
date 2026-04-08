<?php

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

?>

<?php echo $_SERVER["PHP_SELF"]