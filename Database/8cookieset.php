<?php

  setcookie("username","jon carter", time()+3*24*60*60);

  echo "cookie created";

echo "<br> hi".$_COOKIE["username"];


?>