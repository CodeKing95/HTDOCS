<?php
$conn = mysqli_connect("localhost", "root", "", "bookings");

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
?>