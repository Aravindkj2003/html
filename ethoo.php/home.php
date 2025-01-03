<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="kuttan";
    $conn="";


    $conn=mysqli_connect($server,$username,$password,$db);
    if($conn){
        echo "connected succesfully";

        if(isset($_POST['register']))
        {
            // echo $_POST['name'];
            $name = $_POST['name'];
            $age = $_POST['age'];


            $query = "SELECT * from tina WHERE name='$name' AND age='$age'" ;
            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_assoc($result);  // return first row of result.. if more rows loop $row

            if($result){
                echo "<h1>Hello </h1>";
            }

        }
    }
    else{
        echo "not connected";
    }

    
    ?>
</html>
