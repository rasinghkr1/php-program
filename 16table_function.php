<?php

function tableNumber($num)
{
     echo "Table of " .$num."<br >";

    for($y=1; $y<=10; $y++)
   {
      echo "$num x $y =". $num*$y." <br>";
    }

}
tableNumber(5);

?>