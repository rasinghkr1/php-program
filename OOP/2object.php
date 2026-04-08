<?php

class myclass{
   public $name;
   public $age;
 
 public function __construct($myname, $myage)
   {
     $this->name=$myname;
     $this->age=$myage;

   echo "constructor called<br>";
   }
public function displayinfo()
   {
   echo "name ".$this->name. " age " .$this->age;
   }
}

 
$firstobj=new myclass("john",30);

$firstobj->displayinfo();

?>