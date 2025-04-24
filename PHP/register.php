<?php
include "db.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password = $_POST['password'];



    
    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    if($conn->query("select * from user where email = '$email'")->num_rows==1)
    {
        echo "email already registered";
    }else 
    {
        if($conn->query($sql))
        {
            echo "user registered"; 
        }else 
        {
            echo "not registered";
        }

    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form method="post">
        enter username: <input type="text" name="username"><br>
        enter email: <input type="text" name="email"><br>
        enter password: <input type="text" name="password"><br>
        <button type="submit">Submit</button>
    </form>
    <a href="login.php">already user?</a>
</body>
</html>