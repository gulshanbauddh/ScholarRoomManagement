<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>HOME</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.rtl.css">
        <!-- other Links -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bruno+Ace+SC&family=DM+Sans&family=Dosis:wght@600&family=Itim&family=Josefin+Sans&family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>

    <body>
        <!-- ================Header Area Start =================-->
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
                            <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery </a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact </a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!--================Header Area End =================-->


        <!-- <div class="contaner001"> -->


        <!--================Banner Area Start =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h3 class="header-text2">Welcome, <?php echo $_SESSION['name']; ?>
                            <!-- <a href="logout.php">Logout</a> -->
                        </h3>
                        <!-- <h6>Scholar Room's
                    </h6> -->
                        <h2 class="header-text">Room's Only for Student</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, necessitatibus fugit quasi qui
                            voluptates enim iusto sequi ratione cupiditate consequatur.<br>Lorem, ipsum dolor sit amet
                            consectetur adipisicing elit. Dolorem velit dignissimos rerum nesciunt iste autem soluta dolores
                            tempora perspiciatis, expedita assumenda delectus voluptate.</p>
                        <a href="studentLogin.html" class="btn theme_btn button_hover">I am Student</a>
                        <a href="hostalOwnerLogin.html" class="btn theme_btn button_hover">I am Hostal Owner</a>
                    </div>
                </div>
            </div>
        </section>

        <!--================Banner Area End =================-->

        <!--================ Accomodation Area Start =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color header-text">Room Type</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, architecto pariatur? Eveniet,
                        architecto. </p>
                </div>
                <div class="row mb_30 justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/banner/superior/iim_v-x800.webp" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <div class="d-flex justify-content-between Rooms-show">
                                <div class="details-container">
                                    <img src="image/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text" style="font-size: 13px;">OK</p>
                                </div>
                                <div class="details-container" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK MANDI','success',true,true,'pageMessages1');">
                                    <img src="image/svgviewer-output.svg" alt="tick" class="list-icon">
                                    <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                                </div>
                            </div>
                            <div id="pageMessages1">

                            </div>
                            <a href="#">
                                <h4 class="sec_h4 header-text" style="font-size: 24px;">Superior Room</h4>
                            </a>
                            <h5>₹ 3500.0<small>.-/ month</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/banner/delux/nokryjekbbmaoxcacjov.webp" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <div class="d-flex justify-content-between Rooms-show">
                                <div class="details-container">
                                    <img src="image/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text" style="font-size: 13px;">OK</p>
                                </div>
                                <div class="details-container" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages2');">
                                    <img src="image/svgviewer-output.svg" alt="tick" class="list-icon">
                                    <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                                </div>
                            </div>
                            <div id="pageMessages2">

                            </div>
                            <a href="#">
                                <h4 class="sec_h4 header-text" style="font-size: 24px;">Deluxe Room</h4>
                            </a>
                            <h5>₹ 4500.0<small>.-/ month</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/banner/vip/fasilitasvip.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <div class="d-flex justify-content-between Rooms-show">
                                <div class="details-container">
                                    <img src="image/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text" style="font-size: 13px;">OK</p>
                                </div>
                                <div class="details-container" id="Rooms" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC HOT WATER REFRIGERATOR / KULKAS TV CHANEL WASTAPEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages3');">
                                    <img src="image/svgviewer-output.svg" alt="tick" class="list-icon">
                                    <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                                </div>
                            </div>
                            <div id="pageMessages3">

                            </div>
                            <a href="#">
                                <h4 class="sec_h4 header-text" style="font-size: 24px;">VIP Room</h4>
                            </a>
                            <h5>₹ 6500.00<small>.-/ month</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area End =================-->

        <!--================ Facilities Area Start =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w header-text">Al-Istiqamah Facilities</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Realex Area</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Wide Environment</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-laptop-phone"></i>Wifi Access</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-apartment"></i>Comfortable Room
                            </h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-user"></i>Meeting Room</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Complete Facilities </h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color header-text">About Us <br>Our Mission<br> & Vision</h2>
                            <p><b>Mission:</b><br>

                                Our mission to provide a safe, comfortable and affordable living space for students, where
                                they can focus on their academic and personal growth without worrying about the stress of
                                accommodation. We aim to create a vibrant community that promotes diversity, inclusivity,
                                and social interactions while respecting each other's privacy and individuality. Our mission
                                is to create an environment that enables students to learn, grow, and thrive.<br>

                                <b>Vision:<br></b>

                                Our vision is to become the leading student hostel in the region, known for our exceptional
                                facilities, supportive staff, and vibrant community. We aspire to create a home away from
                                home for students, where they can feel comfortable and secure, and focus on their academic
                                and personal development. We aim to provide an environment that fosters collaboration,
                                creativity, and learning among our students, enabling them to develop lifelong friendships,
                                valuable skills, and experiences that will benefit them in their future careers. Our vision
                                is to create a community that empowers students to become responsible, global citizens, and
                                leaders in their respective fields.
                            </p>
                            <a href="/gallery.php" class="button_hover theme_btn_two">Hostal Gallery </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/img/slider/bangunan2.JPG" alt="img" style="box-shadow: 0px 1px 10px black;">
                    </div>

                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->
        </div>
        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
        <a href="logout.php">Logout</a>

        <!--================ Footer Area End =================-->
        <?php
        require '_foot.php'
        ?>
        <!--================ Footer Area End =================-->
    </body>
    </body>

    </html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>