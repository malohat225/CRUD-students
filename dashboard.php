<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<a href="read.php">students crud</a>