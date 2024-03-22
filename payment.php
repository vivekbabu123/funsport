<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment_details</title>
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- header start -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h4>Payment</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pay_bar">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Select</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Debit/Credit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">UPI</a>
                </li>


            </ul>
            <form class="d-flex gap-2 pay_btn">
                <button class="btn" type="submit">Pay Now</button>
                <button class="btn" type="submit">Cancel</button>
            </form>
        </div>
    </div>
</nav>
<hr>
<!-- header finish -->
<!-- confirm_payment start -->
<section class="confirm_pay">
    <div class="container">
        <div class="row">
            <div class="col-md-7 border ">
                <div class="back_arrow">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
                        </svg></span>
                </div>
                <div class="confirm_heading">
                    <h2>Confirm Payment</h2>
                </div>
                <div class="confirm_step1">
                    <p>Step 1:</p>
                </div>
                <div class="tckt_details">
                    <p>Ticket Details</p>
                </div>
                <div class="main_thriding mb-3 d-flex align-items-center justify-content-between">
                    <div class="exciting main_thrid d-flex align-items-center justify-content-between">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M12 6c3.537 0 6.837 1.353 9.293 3.809l1.414-1.414C19.874 5.561 16.071 4 12 4c-4.071.001-7.874 1.561-10.707 4.395l1.414 1.414C5.163 7.353 8.463 6 12 6zm5.671 8.307c-3.074-3.074-8.268-3.074-11.342 0l1.414 1.414c2.307-2.307 6.207-2.307 8.514 0l1.414-1.414z"></path>
                                <path d="M20.437 11.293c-4.572-4.574-12.301-4.574-16.873 0l1.414 1.414c3.807-3.807 10.238-3.807 14.045 0l1.414-1.414z"></path>
                                <circle cx="12" cy="18" r="2"></circle>
                            </svg></span>
                        <p class="mb-0 ms-2">Exciting Events</p>
                    </div>
                    <div class="diverse main_thrid d-flex align-items-center justify-content-between">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M11.99 2C6.472 2 2 6.473 2 11.99c0 4.232 2.633 7.85 6.35 9.306-.088-.79-.166-2.006.034-2.868.182-.78 1.172-4.966 1.172-4.966s-.299-.599-.299-1.484c0-1.388.805-2.425 1.808-2.425.853 0 1.264.64 1.264 1.407 0 .858-.546 2.139-.827 3.327-.235.994.499 1.805 1.479 1.805 1.775 0 3.141-1.872 3.141-4.575 0-2.392-1.719-4.064-4.173-4.064-2.843 0-4.512 2.132-4.512 4.335 0 .858.331 1.779.744 2.28a.3.3 0 0 1 .069.286c-.076.315-.245.994-.277 1.133-.044.183-.145.222-.335.134-1.247-.581-2.027-2.405-2.027-3.871 0-3.151 2.289-6.045 6.601-6.045 3.466 0 6.159 2.469 6.159 5.77 0 3.444-2.171 6.213-5.184 6.213-1.013 0-1.964-.525-2.29-1.146l-.623 2.374c-.225.868-.834 1.956-1.241 2.62a10 10 0 0 0 2.958.445c5.517 0 9.99-4.473 9.99-9.99S17.507 2 11.99 2"></path>
                            </svg></span>
                        <p class="mb-0 ms-2">Diverse Restaurants</p>
                    </div>
                    <div class="screen_pools main_thrid d-flex align-items-center justify-content-between">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M8 12c2.28 0 4-1.72 4-4s-1.72-4-4-4-4 1.72-4 4 1.72 4 4 4zm0-6c1.178 0 2 .822 2 2s-.822 2-2 2-2-.822-2-2 .822-2 2-2zm1 7H7c-2.757 0-5 2.243-5 5v1h2v-1c0-1.654 1.346-3 3-3h2c1.654 0 3 1.346 3 3v1h2v-1c0-2.757-2.243-5-5-5zm9.364-10.364L16.95 4.05C18.271 5.373 19 7.131 19 9s-.729 3.627-2.05 4.95l1.414 1.414C20.064 13.663 21 11.403 21 9s-.936-4.663-2.636-6.364z"></path>
                                <path d="M15.535 5.464 14.121 6.88C14.688 7.445 15 8.198 15 9s-.312 1.555-.879 2.12l1.414 1.416C16.479 11.592 17 10.337 17 9s-.521-2.592-1.465-3.536z"></path>
                            </svg></span>
                        <p class="mb-0 ms-2">Serene Pools</p>
                    </div>
                    <div class="thi_rides main_thrid d-flex align-items-center justify-content-between">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M13 5.5C13 3.57 11.43 2 9.5 2 7.466 2 6.25 3.525 6.25 5h2c0-.415.388-1 1.25-1 .827 0 1.5.673 1.5 1.5S10.327 7 9.5 7H2v2h7.5C11.43 9 13 7.43 13 5.5zm2.5 9.5H8v2h7.5c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5c-.862 0-1.25-.585-1.25-1h-2c0 1.475 1.216 3 3.25 3 1.93 0 3.5-1.57 3.5-3.5S17.43 15 15.5 15z"></path>
                                <path d="M18 5c-2.206 0-4 1.794-4 4h2c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2H2v2h16c2.206 0 4-1.794 4-4s-1.794-4-4-4zM2 15h4v2H2z"></path>
                            </svg>
                        </span>
                        <p class="mb-0 ms-2">Thrilling Rides</p>
                    </div>
                </div>
                <div class="term mb-2">
                    <h4>Terms and Conditions</h4>
                </div>
                <form method="post" action="./config.php" onsubmit="return validateForm()">
                    <div class="mb-3">
                        <label for="ticket_holder" class="form-label">Ticket Holder's Name</label>
                        <input type="text" name="ticket_holder_name" placeholder="Enter your name" class="form-control" required>
                    </div>
                    <hr>
                    <h4>Step 2: Personal Information</h4>
                    <div class="mb-3">
                        <label for="full Name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" id="full_Name" placeholder=" e.g. John Doer" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="  e.g. johndoe@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Phone Number</label>
                        <input type="number" name="mob_number" class="form-control" id="mobile_number" placeholder="  e.g. +123 456 7890" required>
                    </div>

                    <hr>

                    <h4>Step 3: Payment Details</h4>
                    <div class="mb-3">
                        <label for="full Name" class="form-label">Cardholder's Name</label>
                        <input type="text" name="cardholder_name" class="form-control" id="full_Name" placeholder=" e.g. John Doer" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Card Number</label>
                        <input type="number" name="card_number" class="form-control" id="email" placeholder="  **** **** **** ****" required>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Expiry Date</label>
                            <input type="text" name="expiry_date" class="form-control" id="inputEmail4" placeholder="MM/YY" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">CVV</label>
                            <input type="password" name="cvv_number" class="form-control" id="inputPassword4" placeholder="****" required>
                        </div>
                    </div>

                    <hr>
                    <div class="conditi_term py-3">
                        <h4>Terms and Conditions</h4>
                        <div class="timing_tkt d-flex justify-content-between align-items-center">
                            <div class="park_timing d-flex align-items-center">
                                <span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                    </svg> </span>
                                <p class="mb-0 ms-2">Park Timings <br> <span>From 10 AM</span></p>
                            </div>
                            <div class="vaild_tkt d-flex align-items-center">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2z"></path>
                                    </svg></span>
                                <p class="mb-0 ms-2">Ticket Valid Until <br> <span>Until 6 PM</span></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="notice_imp">
                        <h6>Important Notice</h6>
                        <div class="out_side d-flex justify-content-between align-items-center">
                            <div class="food d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path d="M21 6h-2l-1.27-1.27A2.49 2.49 0 0 0 16 4h-2.5A2.64 2.64 0 0 0 11 2v6.36a4.38 4.38 0 0 0 1.13 2.72 6.57 6.57 0 0 0 4.13 1.82l3.45-1.38a3 3 0 0 0 1.73-1.84L22 8.15a1.06 1.06 0 0 0 0-.31V7a1 1 0 0 0-1-1zm-5 2a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"></path>
                                        <path d="M11.38 11.74A5.24 5.24 0 0 1 10.07 9H6a1.88 1.88 0 0 1-2-2 1 1 0 0 0-2 0 4.69 4.69 0 0 0 .48 2A3.58 3.58 0 0 0 4 10.53V22h3v-5h6v5h3v-8.13a7.35 7.35 0 0 1-4.62-2.13z"></path>
                                    </svg></span>
                                <p>No Outside Food Allowed</p>
                            </div>
                            <div class="smoking d-flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path d="M5 2H4v2h1v1a7.014 7.014 0 0 0 3.433 6.02c.355.21.567.547.567.901v.158c0 .354-.212.691-.566.9A7.016 7.016 0 0 0 5 19v1H4v2h16v-2h-1v-1a7.016 7.016 0 0 0-3.434-6.021c-.354-.208-.566-.545-.566-.9v-.158c0-.354.212-.69.566-.9A7.016 7.016 0 0 0 19 5V4h1V2H5zm12 3a5.01 5.01 0 0 1-2.45 4.299A3.107 3.107 0 0 0 13.166 11h-2.332a3.114 3.114 0 0 0-1.385-1.702A5.008 5.008 0 0 1 7 5V4h10v1z"></path>
                                </svg>
                                <p>No Smoking</p>
                            </div>
                            <div class="alcohol d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path d="M5 2H4v2h1v1a7.014 7.014 0 0 0 3.433 6.02c.355.21.567.547.567.901v.158c0 .354-.212.691-.566.9A7.016 7.016 0 0 0 5 19v1H4v2h16v-2h-1v-1a7.016 7.016 0 0 0-3.434-6.021c-.354-.208-.566-.545-.566-.9v-.158c0-.354.212-.69.566-.9A7.016 7.016 0 0 0 19 5V4h1V2H5zm12 3a5.01 5.01 0 0 1-2.45 4.299A3.107 3.107 0 0 0 13.166 11h-2.332a3.114 3.114 0 0 0-1.385-1.702A5.008 5.008 0 0 1 7 5V4h10v1z"></path>
                                </svg>
                                <p>No Alcohol Allowed</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 border">
                <div class="payment_logo text-center ">
                    <img src="./assets/image/paymentlogo.png" alt="img" class="img-fluid">
                </div>
                <div class="pay_funs d-flex align-items-center">
                    <h6 class="mb-0">FunSpot</h6>
                    <div class="ms-3">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                            </svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                            </svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                            </svg></span>

                    </div>
                </div>
                <div>
                    <p>Experience the ultimate water adventure</p>
                </div>
                <div class="tkt_type d-flex align-itmes-center">
                    <p>Ticket Type</p>
                    <p class="ms-4"><?php $date = $_SESSION['booking_date'] . ' ' . $_SESSION['booking_time'];
                                    echo date('D d M Y,  h:i:s A', strtotime($date));
                                    ?></p>
                </div>
                <div class="no_tkt d-flex align-itmes-center">
                    <p>Number of Tickets</p>
                    <p class="ms-4"><?= $_SESSION['booking_people'] ?></p>
                </div>
                <hr>
                <div class="gnral">
                    <h4>General Admission</h4>
                </div>
                <div class="pr_tkt d-flex align-itmes-center">
                    <p>Price per Ticket</p>
                    <p class="ms-4">₹500</p>
                </div>
                <div class="pr_tkt1 d-flex align-itmes-center">
                    <p><?= $_SESSION['booking_people'] ?></p>
                    <p class="ms-4">₹<?= $_SESSION['booking_people'] * 500 ?></p>
                </div>
                <div class="conv d-flex align-itmes-center">
                    <p>Convenience Fee</p>
                    <p class="ms-4">₹60</p>
                </div>
                <hr>
                <div class="total d-flex align-itmes-center">
                    <p>Total Amount</p>
                    <p class="ms-4">₹ <?= $_SESSION['booking_people'] * 500 + 60 ?></p>
                </div>
                <div class="cnfm_book text-center" style="background-color: #ff9500;">
                    <button type="submit" name="final_booking" class="btn text-white fw-bold">Confirm Booking</button>
                </div>
            </div>
            <input type="hidden" name="token" value="<?= rand(10000000,99999999) ?>">

            </form>
        </div>
    </div>

</section>
<!-- confirm_payment finish -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function validateForm() {
        // Mobile number validation (10 digits)
        var mobNumber = document.getElementById('mobile_number').value;
        if (isNaN(mobNumber) || mobNumber.length !== 10) {
            alert('Please enter a valid 10-digit mobile number');
            return false;
        }

        // Card number validation (16 digits)
        var cardNumber = document.getElementById('card_number').value;
        if (isNaN(cardNumber) || cardNumber.length !== 16) {
            alert('Please enter a valid 16-digit card number');
            return false;
        }

        // Expiry date validation (MM/YY format)
        var expiryDate = document.getElementById('expiry_date').value;
        var regex = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/;
        if (!expiryDate.match(regex)) {
            alert('Please enter a valid expiry date in MM/YY format');
            return false;
        }

        // CVV number validation (3 digits)
        var cvvNumber = document.getElementById('cvv_number').value;
        if (isNaN(cvvNumber) || cvvNumber.length !== 3) {
            alert('Please enter a valid 3-digit CVV number');
            return false;
        }

        return true; // Form is valid
    }
</script>
</body>

</html>