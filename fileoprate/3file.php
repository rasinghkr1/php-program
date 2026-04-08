<?php

$file="data.txt";

if(file_exists($file))
  {
  $arr=file($file) or die ("error canot open the file");
   foreach($arr as $line)
           {
                echo $line;
               } 
 
   }
else{
  echo "error file doesn't exist";
  }


?>