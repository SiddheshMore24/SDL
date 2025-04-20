<?php
$conn = mysqli_connect("localhost","root","siddhesh","sdl");

if(!$conn)
{
    echo "Error";
}else 
{
    echo "database connected";
}
?>