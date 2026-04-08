<?php
$num=5;  $sum=0;  $count=0;  $avg;

for($i=$num; $i<=48; $i++)
{
  if($i%3==0)
    {
      $sum+=$i;
      $count++;
echo $i."<br>";
    }
}
$avg=$sum / $count;
echo "average.$avg.<br>";
echo "total number. $count.<br>";
echo "addition of total number .$sum";


?>
