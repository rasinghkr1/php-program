<?php

$conn=new mySqli("localhost:3350","root","");

if($conn==true)
  {
      $sql="create database rmkr";

        if($conn->query($sql))
              {
             echo "database created successful";
              }

          else{
              echo "error: code database not executed";
               }
 $conn->close();
       }
 
else{
   echo "database not connection";
   }


?>