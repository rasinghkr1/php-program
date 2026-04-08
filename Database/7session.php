<?php

session_start();

echo session_id();
echo"<br>";

session_destroy();
echo "<br>";
echo "stopped";

?>