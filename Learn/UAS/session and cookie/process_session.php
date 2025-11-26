<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Password: " . $_SESSION["password"] . "<br>";
echo "<a href='session_data.php'>Session data</a>";
