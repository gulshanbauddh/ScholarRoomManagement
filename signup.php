<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ScholarRoom's - Sign up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="icon" href="image/favicon.png" type="image/png">

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
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item active"><a class="nav-link" href="signup.php">Signup </a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div class="contaner001">

        <form class="formbox" action="signup-check.php" method="post">
            <h2>SIGN UP</h2>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>Name</label>
            <?php if (isset($_GET['name'])) { ?>
            <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
            <?php }else{ ?>
            <input type="text" name="name" placeholder="Name"><br>
            <?php }?>

            <label>User Name</label>
            <?php if (isset($_GET['uname'])) { ?>
            <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
            <?php }else{ ?>
            <input type="text" name="uname" placeholder="User Name"><br>
            <?php }?>


            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <label>Re Password</label>
            <input type="password" name="re_password" placeholder="Re_Password"><br>

            <button type="submit">Sign Up</button>
            <a href="index.php" class="ca">Already have an account?</a>
        </form>
    </div>
    <!-- ================Footer Area Start =================-->
    <?php
        require '_foot.php'
        ?>
    <!--================Footer Area End =================-->
</body>

</html>