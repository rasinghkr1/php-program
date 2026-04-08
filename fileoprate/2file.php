<?php

$file="data.txt";

if(file_exists($file))
  {
  readfile($file) or die ("error cannot open the file");


   }
else{
  echo "error file doesn't exist";
  }


?>