<?php
    require_once('db.php');

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        mysqli_close($conn); // Closing Connection
        header('Location: ../index.php'); // Redirecting To Home Page
    }
?>