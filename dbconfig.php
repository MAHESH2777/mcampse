<?php

$conn=mysqli_connect("localhost","mcampus","","mcampus");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}else{
    // echo" connected";
}

?>