<?php

$conn=new mySqli("localhost","root","","rmkr");

if($conn==true)
  {
      $sql="CREATE TABLE STUDENTS(STD_ID INT, NAME VARCHAR(50))";

        if($conn->query($sql))
           {
             echo "TABLE created successful";
              }

           else{
              echo "error: code  not executed";
              }
    $conn->close();
       }
 
else{
   echo "database not connection";

   }
?>