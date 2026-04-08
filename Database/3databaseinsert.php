<?php

$conn=new mySqli("localhost","root","","rmkr");

if($conn==true)
  {
      $sql="INSERT INTO STUDENTS VALUES(101, 'ANSHU'),(102,'laxman'),(103,'saini'),(104,'meena')";

        if($conn->query($sql))
           {
             echo "DATA INSERT  successful";
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