<?php

$file="data.txt";

$data="the quick brown fox jump over the lazy dog";
 $handle=fopen($file,"w") or die("canot open file");

fwrite($handle,$data) or die("cannot write the file");

fclose($handle);

echo "data written to the file successfully";


?>