<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User Data</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
<?php
$conn=new mySqli("localhost","root","","rmkr");
 if($conn==true)
    {
        $sql="select * from customer;";
        $result=$conn->query($sql);
        if($result->num_rows>0)
            {
                

 
?>

    <div class="registration-form">
        <h2>VIEW DATA</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>USER ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>MOBILE NO</th>
                    <th>ADDRESS</th>
                    <th colspan="2">ACTIONS</th>
                </tr>
            </thead>
            <tbody>

                  <?php
        while($row=$result->fetch_assoc())
                    {
                        ?>
                <tr>

      

                    <td>   <?php echo $row['userid'];  ?> </td>
                    <td>   <?php echo $row['username'];  ?> </td>
                    <td>   <?php echo $row['useremail'];  ?> </td>
                    <td>   <?php echo $row['usermobile'];  ?> </td>
                    <td>   <?php echo $row['useraddress'];  ?> </td>



                    <td><a href="update.php"><button class="btn-edit">Edit</button> </a></td>
                    <td><button class="btn-delete">Delete</button></td>
                </tr>

                  <?php
                   }
            }
      $conn->close();
    }

    ?>

            </tbody>
        </table>
    </div>
</body>
</html>