<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO login (login, password)
            VALUES ('$username', '$password')";

    if ($conn->query($sql)) {
        header("Location: login.php");
        exit();
    }
}
?>

<form method="POST">
    <input type="text" name="login" placeholder="Login"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button>Register</button>
</form>