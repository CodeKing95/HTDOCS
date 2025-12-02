<?php
include "db1.php";

$trip_type       = $_POST['trip_type'];
$departure       = $_POST['departure'];
$destination     = $_POST['destination'];
$departure_date  = $_POST['departure_date'];
$return_date     = $_POST['return_date'];
$departure_time  = $_POST['departure_time'];
$return_time     = $_POST['return_time'];
$airline         = $_POST['airline'];
$passengers      = $_POST['passengers'];
$class           = $_POST['class'];

$sql = "INSERT INTO bookings 
(trip_type, departure, destination, departure_date, return_date, departure_time, return_time, airline, passengers, class)
VALUES 
('$trip_type','$departure','$destination','$departure_date','$return_date','$departure_time','$return_time','$airline','$passengers','$class')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Booking Added Successfully</h2>";
    echo "<a href='view_bookings.php'>View All Bookings</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
