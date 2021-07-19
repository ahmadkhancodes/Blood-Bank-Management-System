<?php
include 'config.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if ($name == 'admin' && $password == 'admin') {
    header("Location: {$hostname}/dashboard.php");
} else {
    echo '<script>alert("Invalid Username or Password!")</script>';
    header("Location: {$hostname}/index.php");
}

mysqli_close($conn);
