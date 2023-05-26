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
    <title>ScholarRoom's - Gallery</title>
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
                        <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
                        <li class="nav-item active"><a class="nav-link" href="gallery.php">Gallery</a></li>
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
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle page-cover-fonds">Gallery</h2>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="gallery_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color header-text">ScholarRoom's Gallery</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row imageGallery1" id="gallery">
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/img/reception/reception1.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/img/reception/reception1.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/img/rm/rm2.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/img/rm/rm2.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/img/wajah/depan.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/img/wajah/depan.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/img/rm/rm4.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/img/rm/rm4.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/banner/delux/deluxe.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/banner/delux/deluxe.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/banner/delux/fasilitasdeluxe2.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/banner/delux/fasilitasdeluxe2.jpg"><i
                                    class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/banner/vip/fasilitasvip1.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/banner/vip/fasilitasvip1.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/banner/superior/pexels-max-rahubovskiy-6782566.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/banner/superior/pexels-max-rahubovskiy-6782566.jpg"><i
                                    class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img ">
                        <img src="image/banner/superior/pexels-photo-11701126.jpeg" alt="">
                        <div class="hover">
                            <a class="light" href="image/banner/superior/pexels-photo-11701126.jpeg"><i
                                    class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img ">
                        <img src="image/banner/superior/pexels-andrew-neel-5860602.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/banner/superior/pexels-andrew-neel-5860602.jpg"><i
                                    class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ start footer Area  =================-->
    <!-- ================Footer Area Start =================-->
    <?php
        require '_foot.php'
        ?>
    <!--================Footer Area End =================-->
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
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>