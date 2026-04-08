<?php

if(isset($_COOKIE["username"]))
  {
     echo "hi ".$_COOKIE["username"];
   }

else {  echo "welcome guest"; }

?>