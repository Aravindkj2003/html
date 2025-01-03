<!DOCTYPE html>
<html>
    <head>
        <title>Hello</title>
</head>
    <body>
        <form action="" method="POST">
            <label>Name:</label>
            <input type="text" name="name">
            <label>age:</label>
            <input type="number" name="age">
            <label>place:</label>
            <input type="text" name="place">
            <label>class:</label>
            <input type="text" name="class">
            <input type="submit" name="register">

        </form>
   
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
            $class = $_POST['class'];
            $place = $_POST['place'];


            $query = "INSERT into tina values('$name', '$age', '$place', '$class')";
            $result = mysqli_query($conn, $query);

            if($result){
                echo "Succesfully registered";
                echo "Login here <a href='login.php'>Login</a>";
            }


        }
    }
    else{
        echo "not connected";
    }

    
    ?>
    </body>
</html>