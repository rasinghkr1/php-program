<html>
<body>


<?php

$cars =array(
                        array("Volvo", 65,44),
                        array("Bmw", 43,15),
                        array("Suzuki", 56,58),
                        array("M&M", 55,43),
                        array("Tata", 67,45)

                  );

for($row=0; $row<5; $row++)
{ 
    for($col=0; $col<3; $col++)
   {
       echo $cars[$row][$col]." ";

  }
  echo "<br>";
}

?>
</body>
</html>