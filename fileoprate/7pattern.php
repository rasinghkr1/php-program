<?php

//ram123@yahoo.co.in

$pattern="/^[a-z][a-zA-Z\d\.]+[@][a-z]+[\.][a-z]{2,6}|[\.][a-z]{2,6}$/";

if(isset($_POST['submit']))
    {
         if(preg_match($pattern, $_POST['mytext']))
          {
            $output="<span style=color:green> ok </span>";
           }
          else { 
            $output="<span style=color:red> wrong </span>";
            }

     }
?>

<html>
<body>

<form method="POST">
<input type="text" name="mytext">
<input type="submit" name="submit">
</form>
<?php
if(isset($output)){
 echo $output;
}

?>
</body>
</html>