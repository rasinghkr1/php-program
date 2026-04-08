<?php

class myclass
{
  

public function __destruct()
   {
  echo "destructor is called" ;
  }

}
$objdes=new myclass();

?>