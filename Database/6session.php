<?php

session_start();

echo session_id();
echo"<br>";

echo $_SESSION["firstname"];
 echo $_SESSION["lastname"];

?>
