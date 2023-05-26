<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>ScholarRoom's - Room</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <!-- other Links -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bruno+Ace+SC&family=DM+Sans&family=Dosis:wght@600&family=Itim&family=Josefin+Sans&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="image/Logo.png" alt="#" width="85">
                    <div class="navbar-heading-text">ScholarRoom's</div>
                </a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item active"><a class="nav-link" href="room.php">Rooms</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout </a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center ">
                <h2 class="page-cover-tittle page-cover-fonds">Rooms</h2>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color header-text">Room Type</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30 justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/banner/superior/iim_v-x800.webp" alt="" width="270" height="270"
                                style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between Rooms-show">
                            <div class="details-container">
                                <img src="image/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" style="cursor: pointer;"
                                onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK MANDI','success',true,true,'pageMessages1');">
                                <img src="image/svgviewer-output.svg" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages1">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">Superior Room</h4>
                        </a>
                        <h5>350.000<small>.-/ Malam</small></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/banner/delux/deluxedoubel.jpg" alt="" width="270" height="270"
                                style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between Rooms-show">
                            <div class="details-container">
                                <img src="image/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" style="cursor: pointer;"
                                onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages2');">
                                <img src="image/svgviewer-output.svg" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages2">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">Deluxe Room</h4>
                        </a>
                        <h5>435.000<small>.-/ Malam</small></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/banner/vip/fasilitasvip.jpg" alt="" width="270" height="270"
                                style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between Rooms-show">
                            <div class="details-container">
                                <img src="image/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" id="Rooms" style="cursor: pointer;"
                                onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC HOT WATER REFRIGERATOR / KULKAS TV CHANEL WASTAPEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages3');">
                                <img src="image/svgviewer-output.svg" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages3">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">VIP Room</h4>
                        </a>
                        <h5>495.000<small>.-/ Malam</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    <!--================Booking Tabel Area =================-->
    <section class="hotel_booking_area">
        <div class="container">
            <div class="row hotel_booking_table">
                <div class="col-md-3">
                    <h2>Book<br> Your Room</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Arrival Date" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Departure Date" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Adult">Adult</option>
                                            <option value="1">Old</option>
                                            <option value="2">Younger</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Child">Child</option>
                                            <option value="1">Child</option>
                                            <option value="2">Baby</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Child">Number of Rooms</option>
                                            <option value="1">Room 01</option>
                                            <option value="2">Room 02</option>
                                            <option value="3">Room 03</option>
                                        </select>
                                    </div>
                                    <a class="book_now_btn button_hover" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Booking Tabel Area  =================-->
    <!-- ================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color header-text">Normal Accomodation</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
            </div>
            <div class="row accomodation_two">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room1.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room2.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room3.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Honeymoon Suit</h4>
                        </a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room4.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Economy Double</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room1.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room2.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room3.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Honeymoon Suit</h4>
                        </a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room4.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Economy Double</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    <!--================ start footer Area  =================-->
    <?php
        require '_foot.php'
        ?>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
    function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
        var iconMap = {
            info: "fa fa-info-circle",
            success: "fa fa-thumbs-up",
            warning: "fa fa-exclamation-triangle",
            danger: "fa ffa fa-exclamation-circle"
        };

        var iconAdded = false;

        var alertClasses = ["alert", "animated", "flipInX"];
        alertClasses.push("alert-" + severity.toLowerCase());

        if (dismissible) {
            alertClasses.push("alert-dismissible");
        }

        var msgIcon = $("<i />", {
            "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
        });

        var msg = $("<div />", {
            "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
        });

        if (title) {
            var msgTitle = $("<h4 />", {
                html: title
            }).appendTo(msg);

            if (!iconAdded) {
                msgTitle.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (summary) {
            var msgSummary = $("<strong />", {
                html: summary
            }).appendTo(msg);

            if (!iconAdded) {
                msgSummary.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (details) {
            var msgDetails = $("<p />", {
                html: details
            }).appendTo(msg);

            if (!iconAdded) {
                msgDetails.prepend(msgIcon);
                iconAdded = true;
            }
        }


        if (dismissible) {
            var msgClose = $("<span />", {
                "class": "close", // you need to quote "class" since it's a reserved keyword
                "data-dismiss": "alert",
                html: "<i class='fa fa-times-circle'></i>"
            }).appendTo(msg);
        }

        $('#' + appendToId).prepend(msg);

        if (autoDismiss) {
            setTimeout(function() {
                msg.addClass("flipOutX");
                setTimeout(function() {
                    msg.remove();
                }, 1000);
            }, 5000);
        }
    }
    </script>
</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>