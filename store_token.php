<?php
session_start(); // Start the PHP session

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["token"])) {
    $_SESSION['booking_token'] = $_POST['token'];
    echo "Token stored successfully!";
} else {
    echo "Error storing token!";
}
?>
