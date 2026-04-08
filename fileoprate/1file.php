<?php

$file="data.txt";

if(file_exists($file))
  {
  $handle= fopen($file,"r") or die ("error cannot open the file");
 $content= fread($handle, filesize($file));

 
fclose($handle);
echo $content;
   }
else{
  echo "error file doesn't exist";
  }


?>