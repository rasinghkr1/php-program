<?php

$conn=new mySqli("localhost","root","","rmkr");

if($conn==true)
  {
      $sql="select * from students";
          $result=$conn->query($sql);

        if($result->num_rows>0)
           { 
             echo "<table border=1px>  <tr> <td>NAME</td> <td>EMAIL</td> </tr>";
               
              while($row=$result->fetch_assoc())
              {
                echo "<tr>";
                 echo "<td>".$row["STD_ID"]."</td>";
                 echo "<td>".$row["NAME"]."</td>";
                 echo "</tr>";
                 }
             echo "</table>";
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