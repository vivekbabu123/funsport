<?php
session_start();
include '../db.php';

if (!isset($_SESSION["admin_username"])) {
    session_destroy();
    header("Location: ./");
    exit; // Stop further execution
}

// Assuming $conn is your database connection object
$token = $_GET['token'];
$sql_select = "SELECT * FROM booking_details WHERE booking_token='$token'";
$result = $conn->query($sql_select);
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .card.recent-sales {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card.recent-sales .card-title {
            color: #333;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .ticket3 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .ticket3__details {
            flex: 1;
        }

        .ticket3__details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .ticket3__details ul li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
        }

        .ticket3__price {
            flex: 0 0 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ff6b6b;
            color: #fff;
            border-radius: 10px;
            padding: 10px;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .ticket3__price img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <?php include './top_sidebar.php'; ?>

    <main id="main" class="main">

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Sales Card -->



                        <!-- Recent Sales -->
                        <div class="col-12">

                            <div class="card recent-sales">
                                <div class="card-body">
                                    <h5 class="card-title">Booking Details<span> | <?= $token ?></span></h5>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <h2 class="text-center mb-4">Booking Details</h2>
                                            <div class="ticket3">
                                                <div class="ticket3__details">
                                                    <ul>
                                                        <li><strong>Booking Token:</strong> <?= $row["booking_token"]; ?></li>
                                                        <li><strong>Full Name:</strong> <?= $row["full_name"]; ?></li>
                                                        <li><strong>Email:</strong> <?= $row["email"]; ?></li>
                                                        <li><strong>Cardholder Name:</strong> <?= $row["cardholder_name"]; ?></li>
                                                        <li><strong>Booking Date:</strong> <?= $row["booking_date"]; ?></li>
                                                        <li><strong>Booking Time:</strong> <?= $row["booking_time"]; ?></li>
                                                        <li><strong>Booking People:</strong> <?= $row["booking_people"]; ?></li>
                                                        <li><strong>Booking Group:</strong> <?= $row["booking_group"]; ?></li>
                                                        <li><strong>Final Amount:</strong> <?= $row["final_amt"]; ?></li>
                                                    </ul>
                                                </div>
                                                <div class="ticket3__price">
                                                    <img src="./assets/image/qrq.png" alt="QR Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Recent Sales -->



                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <?php include './admin_footer.php'; ?>

</body>

</html>