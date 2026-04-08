
<?php
  $userid= $_POST["studentid"];
  $username= $_POST["username"];

$conn=new mySqli("localhost","root","","rmkr");

if($conn==true)
  {
      $sql="INSERT INTO STUDENTS VALUES('$userid', '$username')";

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

