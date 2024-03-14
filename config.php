<?php
session_start(); // Start the PHP session

include 'db.php';



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["booking_step1"])) {
    // Process the form data
    $_SESSION['booking_date'] = $_POST['date'];
    $_SESSION['booking_time'] = $_POST['time'];
    $_SESSION['booking_people'] = $_POST['people'];
    $_SESSION['booking_group'] = $_POST['group'];

    // Redirect to the next step or page
    header("Location: payment.php"); // Replace next_step.php with the actual next step or page
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["final_booking"])) {
    // Get the form data
    $booking_token = $_SESSION['booking_token'];
    $ticket_holder_name = $_POST['ticket_holder_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mob_number = $_POST['mob_number'];
    $cardholder_name = $_POST['cardholder_name'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv_number = $_POST['cvv_number'];
    $booking_date = $_SESSION['booking_date'];
    $booking_time = $_SESSION['booking_time'];
    $booking_people = $_SESSION['booking_people'];
    $booking_group = $_SESSION['booking_group'];
    $final_amt = $booking_people * 500 + 60;

    // Insert the form data into the database
    $sql = "INSERT INTO booking_details (booking_token, ticket_holder_name, full_name, email, mob_number, cardholder_name, card_number, expiry_date, cvv_number, booking_date, booking_time, booking_people, booking_group, final_amt)
            VALUES ('$booking_token', '$ticket_holder_name', '$full_name', '$email', '$mob_number', '$cardholder_name', '$card_number', '$expiry_date', '$cvv_number', '$booking_date', '$booking_time', '$booking_people', '$booking_group','$final_amt')";
    if ($conn->query($sql) === TRUE) {
        echo "Booking details stored successfully!";
    } else {
        echo "Error storing booking details: " . $conn->error;
    }
}
// get the from data into database 
