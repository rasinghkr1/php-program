<html>
<body>


<?php

$age= array("peter"=>"35", "ben"=>"57", "joe"=>"73", "param"=>"53");

print_r($age);
echo "<br><br><br>";

echo "asort  associate value ascending Array=";
 asort($age);
print_r($age);

echo "<br><br><br>";

echo "ksort associate key ascending Array=";
 ksort($age);
print_r($age);

echo "<br><br><br>";

echo "arsort  associate value reverse Array=";
 arsort($age);
print_r($age);

echo "<br><br><br>";

echo "krsort associate key reverse Array=";
 krsort($age);
print_r($age);


?>
</body>
</html>