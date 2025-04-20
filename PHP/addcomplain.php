<?php
include "db.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $complain=$_POST['detail'];
    $sql = "insert into complain (name,detail) values ('$name','$complain')";
    if($conn->query($sql) == TRUE)
    {
        echo "complain issued";
    }else 
    {
        echo "error". $conn->error;
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
    <form action="" method="post">
        Your Name: <input type="text" name="name"><br>
        what is your complain <input type="text" name="detail"><br>
        <button type="submit">submit</button>
    </form>
    
</body>
</html>