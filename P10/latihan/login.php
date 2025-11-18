<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ((($username == 'joko') && ($password == 'passjoko')) || (($username == 'amir') && ($password == 'passamir'))) {
    echo "Login successful. Welcome, $username!";
} else {
    echo "Login failed. Invalid username or password.";
}
