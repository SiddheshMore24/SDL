<?php

include "db.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $password=$_POST['password'];

    $sql = "select * from user where email = '$email'";
    $result = $conn -> query($sql);
    if($result->num_rows==1)
    {
        $user = $result->fetch_assoc();

        if($password==$user['password'])
        {
           header("Location:dashboard.php");
        }
        else 
        {
           echo "wrong password";
        }
        
    }else{
            echo "user not found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login User</h1>
    <form action="" method="post">
       enter email: <input type="text" name='email'><br>
       enter password: <input type="password" name='password'><br>
       <button type ="submit">Login</button>
        
    </form>
</body>
</html>