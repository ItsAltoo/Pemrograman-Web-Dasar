<?php
$username = $_POST["username"];
$password = $_POST["password"];

if (isset($username) || isset($password)) {
    setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("password", $password, time() + (86400 * 30), "/");
    echo "Cookies have been set successfully.";
    echo "<br><a href='cookie_data.php'>View Cookie Data</a>";
} else {
    echo "Username or password not set.";
    exit;
}
