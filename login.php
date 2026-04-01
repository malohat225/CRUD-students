<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE login='$username'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['login'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Login xato!";
    }
}
?>

<form method="POST">
    <input type="text" name="username"><br><br>
    <input type="password" name="password"><br><br>
    <button>Login</button>
</form>

<a href="register.php">Register</a>