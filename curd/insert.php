<?php
$userid = $_POST["userid"];
$username = $_POST["username"];
$useremail = $_POST["useremail"];
$usermobile = $_POST["usermobile"];
$useraddress = $_POST["useraddress"];

$conn=new mySqli("localhost","root","","rmkr");
if($conn==true)
    {
        $sql="insert into customer(userid,username,useremail,usermobile,useraddress) 
        values('$userid','$username','$useremail','$usermobile','$useraddress');";
        if($conn->query($sql))
            {
                header("Location: index.php");
                exit();
                //echo "insert value success full";
            }
     $conn->close();
    }


?>