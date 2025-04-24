<?php
$conn = new mysqli("localhost","root","siddhesh","sdl");
$token= $_GET['token'];
$id = $_GET['id'];
echo $id;
$result = $conn -> query("SELECT * FROM userdata WHERE id = '$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($token)
    {
        $row = $result -> fetch_assoc();
        echo "<h1> Hello ".$row['name']."</h1>";
        echo "<h1>". $row['email'] ."</h1>";
        echo "Email Verified successfully";
    }
    else
    {
        echo "Invalid or missing token";
    }
    ?>
</body>
</html>