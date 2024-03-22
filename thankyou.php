<?php
session_start();
include './db.php';

// Assuming $conn is your database connection object
$token = base64_decode($_GET['token']);
$sql_select = "SELECT * FROM booking_details WHERE booking_token='$token'";
$result = $conn->query($sql_select);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank you</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <!-- header start -->
        <?php include "header.php"?>
    <!-- header footer -->
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
                                                <img src="./admin/assets/image/qrq.png" alt="QR Code">
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





<!-- footer start -->
<?php include "footer.php"?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>