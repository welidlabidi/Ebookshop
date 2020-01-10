<?php
session_start();
require 'registratieform.php';
//require '\laragon\www\Ebookshop\model\connection.php';
//require '\laragon\www\Ebookshop\control\control.php';

//if($_SERVER['REQUEST_METHOD'] == 'POST')datastore($_POST['Username'] , $_POST['email'] ,0 ,0 ,'' , $_POST['password']);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyBook</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="login.css" rel="stylesheet">
    <!-- my css -->
    <link href="registratiemy.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>


<body class="grey lighten-3">

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                <strong class="blue-text">MyBook</strong>
            </a>
            <a class="navbar-brand waves-effect" href="home.html"></a>
            <img src="img/mybook logo.png" alt="">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto ml-3">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="product-page.html" target="_blank">Search for books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="checkout-page.html" target="_blank">Checkout</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-effect">
                            <span class="badge red z-depth-1 mr-1"> 1 </span>
                            <i class="fas fa-shopping-cart"></i>
                            <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link" target="_blank">
                            </i>Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="registration.html" class="nav-link border border-light rounded waves-effect"
                            target="_blank">
                            </i>Register
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn ">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">register</h2>

            <!--Grid row-->
            <div class="row ">

                <!--Grid column-->
                <div class="col-md-6 mb-4  ">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body ">
                            <form action="" method="POST">

                                <!--Grid row-->
                                <div class="row ">

                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                                <!--username-->
                                <div class="md-form">
                                    <input type="text" id="username" name="username" placeholder="Username"
                                        class="form-control">
                                    <span class="error">
                                        <?php if(!empty($_SESSION["usernameerr"])) {echo $_SESSION["usernameerr"];}?></span>
                                </div>

                                <!--email-->
                                <div class="md-form">
                                    <input type="text" id="email" name="email" placeholder="Youremail@example.com"
                                        class="form-control">
                                    <span class="error">
                                        <?php if(!empty($_SESSION["emailerr"])) {echo $_SESSION["emailerr"];}?></span>
                                </div>

                                <!--password-->
                                <div class="md-form mt-3">
                                    <input type="text" id="password" name="password" placeholder="Password"
                                        class="form-control">
                                    <span class="error">
                                        <?php if( !empty($_SESSION["passworderr"])) {echo $_SESSION["passworderr"];}?></span>
                                </div><br>

                                <div class="forgot">
                                    <a href="#">forgot password</a>
                                </div>
                                <div class="form-check pl-0 mt-4 ml-4 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck266"
                                        required>
                                    <div class="terms">
                                        <label class="form-check-label" for="invalidCheck266" id="terms">Agree to <a
                                                href="conditions.html">
                                                terms
                                                and
                                                conditions</label>
                                    </div>


                                    <button class=" btn btn-primary btn-lg btn-block" value="submit" type="submit"
                                        name="submit" id="submit">register</button>

                            </form>
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fab fa-github mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2020 Copyright Becode Team
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript" src="js/app.js">
    </script>
    <script type="text/javascript">
    //Animations initialization
    new WOW().init();
    </script>
</body>

</html>