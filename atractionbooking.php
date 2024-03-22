<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractionbooking</title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- start header -->
    <header class="menu_funstop my-3">
        <div class="container">
            <div class="row">
                <div class="funspot_haeder d-flex justify-content-between aling-items-center">
                    <div class="funsport_work">
                        <a href="#" class="text-dark">Funspot Waterpark</a>
                    </div>
                    <div class="backfunspot">
                        <a href="./index.php"><button class="btn border shadow-none">Back</button></a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- finish header -->
    <!-- attractbody start -->
    <section class="attract">
        <div class="container">
            <div class="row">
                <div class="attrac_book text-center py-5">
                    <h1>Attraction Booking</h1>
                </div>
            </div>
        </div>

    </section>

    <!-- attractbody finish -->
    <!-- bookfunspot start -->
    <section class="book_spot">
        <div class="container">
            <div class="row">
                <div class="bookspot_heading text-center">
                    <p>Book your favorite attractions and enjoy a day filled with excitement and adventure at FunSpot
                        Waterpark.
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <form id="bookingForm" method="post" action="./config.php">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="date" id="date" value="<?= date('Y-m-d') ?>" name="date" min="<?= date('Y-m-d') ?>">

                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="time" id="time" name="time">
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group d-flex align-items-center">
                                        <span><img src="./assets/image/user.png" alt="img" class="img-fluid me-2"></span>
                                        <input type="number" id="people" name="people" min="1" class="form-control ml-2" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group d-flex align-items-center">
                                        <span><img src="./assets/image/user.png" alt="img" class="img-fluid me-2"></span>
                                        <label for="group">Group Size</label>

                                    </div>
                                    <div>
                                        <select id="group" name="group">
                                            <option value="Family group">Family group</option>
                                            <option value="Student Group">Student Group</option>
                                            <option value="College group">College group</option>
                                            <option value="Office group">Office group</option>
                                            <option value="Kids party">Kids party</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="booking_btn">
                                <button type="submit" name="booking_step1" class="btn" onclick="validateForm()">Confirm Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- bookfunspot finish -->
    <footer class="footer_nav">
        <div class="container">
            <div class="row">
                <div class="main_footer d-flex justify-content-between">
                    <div class="futter_left">
                        <h2>Funspot</h2>
                        <p class="mb-0">Term and conditions</p>
                        <p>Waterpark Rules & regulations</p>
                        <p>All right are reserved @2004</p>
                    </div>
                    <div class="footer_right">
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Customer</a></li>
                            <li><a href="#">How to navigate</a></li>
                            <li><a href="#">Get in touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>

        function validateForm() {
            var date = document.getElementById('date').value;
            var people = document.getElementById('people').value;
            var group = document.getElementById('group').value;

            if (date === '' || people === '' || group === '') {
                alert('Please fill in all fields');
                return false;
            }


            return false;
        }
    </script>

</body>

</html>