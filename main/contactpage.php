<?php involve('title.php'); ?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php title('Contact Us'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="blog contact">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <?php involve('header.php'); ?>
        <!-- Header Area End Here -->
        <!--  Banner Area Start here -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="main-bennar">
                            <h2>Contact Us</h2>
                            <div class="breadcumb">
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Banner Area End here -->
        <!-- Main Contact page Start here -->
        <div class="contact-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="contact-form-area">
                            <h2>Contact Form</h2>
                            <form action="process.php" method="POST">
                                <fieldset class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Name : </label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>E-mail : </label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Phone Number : </label>
                                            <input type="tel" name="telephone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Message : </label>
                                            <textarea cols="40" rows="5" name="message" class="textarea form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send submit-buttom" type="submit">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="office-address">
                            <h2>OFFICE ADDRESS</h2>
                            <ul>
                                <li>
                                    <a href="contact.html#">
                                        <i class="fa fa-map-marker"></i>
                                        <span>80 San Francisco Boulevard,San Francisco AU. ZIP 123 556</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html#">
                                        <i class="fa fa-phone"></i>
                                        <span>(123) 00 8888 999</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html#">
                                        <i class="fa fa-envelope-o"></i>
                                        <span>info@miakolegalr.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html#">
                                        <i class="fa fa-building-o"></i>
                                        <span>(123) 456 789 0000</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Contact page End here -->
        <div class="google-map-area">
            <div id="googleMap" style="width:100%;height:470px;"></div>
        </div>
        <!-- Partner Logo Area Start Here -->
        <div class="client-logo-area">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="contact.html#">
                            <img src="img/client/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Logo Area End Here -->
        <!-- Get Free Consultation Start Here -->
        <div class="get-free-consultation-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="consultation-text">
                            <h3>If you have any legal problem in your life ... We are available</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="contact-buttom">
                            <a href="contact.html">Get Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get Free Consultation End Here -->
        <!-- Footer Area Start Here -->
        <?php invlove('footer.php'); ?>
        <!-- Footer Area End Here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
		============================================ -->
        <!-- Google Map js -->
        <script>
            var map;

            function initMap() {
                map = new google.maps.Map(document.getElementById('googleMap'), {
                    center: {
                        lat: -37.81618,
                        lng: 144.95692
                    },
                    zoom: 15
                });
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgREM8KO8hjfbOC0R_btBhQsEQsnpzFGQ&callback=initMap" async
            defer></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>
        <!-- Nivo slider js
        ============================================ -->
        <script src="custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="custom-slider/home.js" type="text/javascript"></script>
        <!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
    </body>

</html>
