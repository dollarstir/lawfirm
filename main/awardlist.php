
<?php involve('title.php');

?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php title('Awards'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="main/img/favicon.png">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/font-awesome.min.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="main/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="main/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/owl.carousel.css">
        <link rel="stylesheet" href="main/css/owl.theme.css">
        <link rel="stylesheet" href="main/css/owl.transitions.css">
        <!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/jquery-ui.css">
        <!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/meanmenu.min.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/normalize.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/main.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="main/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="main/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="main/style.css">
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="main/css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="main/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="Home-three about-us awards">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="main/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
                            <h2>Winning Awards</h2>
                            <div class="breadcumb">
                                <ul>
                                    <li>
                                        <a href="main/index.html">Home</a>
                                    </li>
                                    <li>Awards</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Banner Area End here -->
        <!-- Winning Awards Section Area Start Here -->
        <div class="our-wining-awards-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wining-section-area">
                            <h2>Our Winning Awards</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                humouror randomised words which don't look</p>
                        </div>
                    </div>
                </div>
                <div class="wining-section">
                    <div class="row">
                        
                        <?php
                            $g = new Sel();
                            $aw = $g->getall('awards');
                            foreach ($aw as $row) {
                                if (empty($aw)) {
                                    echo 'no records';
                                } else {
                                    echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-wining-section">
                                    <div class="image">
                                        <a href="main/awards.html#">
                                            <img src="main/img/awards.png" alt="images">
                                        </a>
                                    </div>
                                    <p>Pages you view in incognito tabs won’t stick around in your browser’s history cookie store,
                                        or search historyThere are variations of passages of Lorem Ipsum but the majority have
                                        suffered humouror randomised words which.</p>
                                </div>
                            </div>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Winning Awards Section Area End Here -->
        <!-- Testimonial Section Start Here -->
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>Testimonials</h2>
                            <div class="testimonial">
                                <div class="single-testimonial">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat temporibus eius provident
                                        dolores ratione, iure laboriosam laborum odit nulla. Eaque repudiandae amet officia
                                        maiores deleniti ab sit. Accusantium, modi ipsam.</p>
                                    <div class="picture">
                                        <a href="main/awards.html#">
                                            <img alt="" src="main/img/clients/00.jpg">
                                        </a>
                                        <h3>
                                            <a href="main/awards.html#">Robert</a>
                                        </h3>
                                        <h4>
                                            <a href="main/awards.html#">Manger</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat temporibus eius provident
                                        dolores ratione, iure laboriosam laborum odit nulla. Eaque repudiandae amet officia
                                        maiores deleniti ab sit. Accusantium, modi ipsam.</p>
                                    <div class="picture">
                                        <a href="main/awards.html#">
                                            <img alt="" src="main/img/clients/0.jpg">
                                        </a>
                                        <h3>
                                            <a href="main/awards.html#">Robert</a>
                                        </h3>
                                        <h4>
                                            <a href="main/awards.html#">Manger</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat temporibus eius provident
                                        dolores ratione, iure laboriosam laborum odit nulla. Eaque repudiandae amet officia
                                        maiores deleniti ab sit. Accusantium, modi ipsam.</p>
                                    <div class="picture">
                                        <a href="main/awards.html#">
                                            <img alt="" src="main/img/clients/01.jpg">
                                        </a>
                                        <h3>
                                            <a href="main/awards.html#">Robert</a>
                                        </h3>
                                        <h4>
                                            <a href="main/awards.html#">Manger</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End Here -->
        <!-- Partner Logo Area Start Here -->
        <div class="client-logo-area">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/awards.html#">
                            <img src="main/img/client/3.jpg" alt="">
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
                            <a href="main/contact.html">Get Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get Free Consultation End Here -->
        <!-- Footer Area Start Here -->
        <?php involve('footer.php'); ?>
        <!-- Footer Area End Here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery
		============================================ -->
        <script src="main/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="main/js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="main/js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="main/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="main/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="main/js/owl.carousel.min.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="main/js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="main/js/plugins.js"></script>
        <!-- Nivo slider js
        ============================================ -->
        <script src="main/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="main/custom-slider/home.js" type="text/javascript"></script>
        <!-- main JS
		============================================ -->
        <script src="main/js/main.js"></script>
    </body>

</html>