<?php



$data = "Jitendra Kumar";



$qrCode = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' . urlencode($data);

$ch = curl_init();

// Set the cURL options
curl_setopt($ch, CURLOPT_URL, $qrCode);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Display the QR code image
echo '<img src="data:image/png;base64,' . base64_encode($response) . '" alt="QR Code">';
