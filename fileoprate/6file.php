<?php

$file="data.txt";

if(file_exists($file))
  {
   if(rename($file,"newfile.txt"))
       {
          echo "file renamed successful";
           }

       else{
           echo "error file name";
            }


   }


else{
  echo "error file doesn't exist";
  }


?>