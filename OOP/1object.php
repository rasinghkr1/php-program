<?php

class person
{
  public $name;
  public $age;

public function greet()
   {
  echo "my name is ".$this->name , $this->age." ,";
  }
}
$person1=new person();
$person1->name="raman";
$person1->age=25;
 $person1->greet();

?>