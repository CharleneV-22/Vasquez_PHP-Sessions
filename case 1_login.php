<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: dashboard.php");
    exit();
}
?>
<form method="POST">
    <label>Enter Username:</label>
    <input type="text" name="username" required>
    <button type="submit">Login</button>
</form>
