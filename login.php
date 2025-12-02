<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Check user
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {

        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            echo "Login Successful!";
            // Redirect to dashboard
            header("Location: dashboard.php");
        } else {
            echo "Incorrect password!";
        }

    } else {
        echo "User not found!";
    }
}
?>
