<?php

$conn = mysqli_connect("localhost","root","siddhesh","sdl");
if(!$conn)echo "error in connection";


$token="";
$id="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $sql = "Select * from userdata where email = '$email'";
    $res= $conn->query($sql);
    if($res->num_rows==1)
    {
        $id= $res->fetch_assoc()['id'];
        $token = md5($_POST['email'] . $id . time());
    }else {
        echo "Invalid mail";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h1>Enter email</h1>
    <form action="" method = "post">
        email: <input type="email" name= "email">
        password : <input type="password" name ="password" >

        <button type = "submit">Submit</button>
    </form>
    <?php
      
      if($token):
        echo "ID:" . $id . "<br>";
        echo 'click here to verify email <br>';
        echo "<a href=\"verify.php?token=$token&id=$id\">Click here</a>";
        // echo "<a href=\"verify.php?token=$token&id=$id\">Click here</a>"; 
        
      endif;
    ?>

</body>
</html>