<?php
session_start();
// session_destroy(); // Digunakan untuk menghapus semua data session
// unset($_SESSION["username"]); // Menghapus data session tertentu

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Password: " . $_SESSION["password"] . "<br>";
?>