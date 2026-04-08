<?php

$file="data.txt";

$data="Train multiple customers simultaneously from a central place
Build tailored learning portals — what we call academies — for each customer to streamline, standardize, and scale training.";

file_put_contents($file, $data) or die("error cannot write the file");


?>