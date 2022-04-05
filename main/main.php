<?php involve('title.php'); ?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php title('Welcome'); ?></title>
        <meta name="description" content="Law ">
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

    <body>
       
        <!-- Header Area Start Here -->
       <?php involve('header.php'); ?>
        <!-- Header Area End Here -->
        <!-- slider -->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    
                    <img src="main/img/slides/slide2.jpg" alt="image" title="#slider-direction-2" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow zoomIn"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomIn;">
                                We
                                <span class="title-builder"> are </span>
                                <span class="title-builder"> Voice </span> of
                                <span class="title-builder"> Justice</span>
                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                                style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                                Lowyer / Law Firm / Attorney
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button wow fadeIn" style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <a href="about" class="btn btn-success">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfr s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">To Get Our Proper Justice</h1>
                            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                                style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                                Lowyer / Law Firm / Attorney
                            </div>
                            <div style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s;" class="button wow fadeIn" data-wow-duration="4s"
                                data-wow-delay="0.4s">
                                <a class="btn btn-success" href="contactus">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end-->
        <!-- Slider Buttom Area Start Here -->
        <div class="slider-buttom-area">
            <div class="container-fluid acurate">
                <div class="row acurate">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 acurate">
                        <div class="single-slider-buttom-area slider-button-one">
                            <div class="slider-buttom-overlay"></div>
                            <div class="content-area">
                                <div class="first-box-content">
                                    <h3>Emergency Cases</h3>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur.</p> -->
                                    <p class="call-now">Call Us Now</p>
                                    <p class="phone-number">
                                        <?php $tel = fetchall('contact');
                                       echo ' <a href="tel:'.$tel[0]['phone'].'">'.$tel[0]['phone'].'</a>';
                                        ?>
                                        
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 acurate">
                        <div class="single-slider-buttom-area slider-button-two">
                            <div class="slider-buttom-overlay"></div>
                            <div class="content-area">
                                <h3>Need Legal Help?</h3>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eos, quod, earum aspernatur
                                    officiis.
                                </p> -->
                                <a href="contactus" class="call-us-buttom">Make An Appointment</a>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 acurate">
                        <div class="single-slider-buttom-area slider-button-three">
                            <div class="slider-buttom-overlay"></div>
                            <div class="content-area">
                                <h3>Working Hours</h3>
                                <ul>
                                    <li>Monday – Friday
                                        <span> 8.00 am- 10.00 pm </span>
                                    </li>
                                    <li>Monday – Friday
                                        <span> 8.00 am- 10.00 pm </span>
                                    </li>
                                    <li>Monday – Friday
                                        <span> 8.00 am- 10.00 pm </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Buttom Area End Here -->
        <!-- About Lawyer Area Start Here -->
        <div class="about-lawyer-area">
            <?php $law = fetchall('ceo'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-lawyer-featured-image">
                            <a href="home">
                                <img src="yolkassets/upload/<?php echo $law[0]['image']; ?>" alt="about">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="about-content-area">
                            <h1>About
                                <span>CEO</span>
                            </h1>
                            <p><?php echo $law[0]['content']; ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Lawyer Area End Here -->
        <!-- Our Practice Area Start Here -->
        <div class="container-fluid our-practice-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>Our PRACTICE AREAS</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates
                                libero possimus sapiente.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="practice-area">
                <div class="practice-section">
                    <?php practice(); ?>
                </div>
            </div>
        </div>
        <!-- Our Practice Area End Here -->
        <!-- Advertise Banner Area Start -->
        <div class="advertise-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="bennar">
                            <h2>Pay Nothing
                                <span>Unless</span>
                                <br/>We
                                <span>Win</span> The Case.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advertise Banner Area End -->
        <!-- Happy Client Area Start Here -->
        <div class="happy-client-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>Happy Client</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="client-section-area">
                            <div class="client-section">
                                <?php testimony(1); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Happy Client Area End Here -->
        <!-- Our Attorney Start Here -->
        <div class="our-attorney-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>Our Attorney</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="our-attorney">
                    <?php attorney(); ?>
                </div>
            </div>
        </div>
        <!-- Our Attorney End Here -->
        <!-- Latest News Area Start Here -->
        <!-- <div class="latest-news-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>LATEST NEWS From ATTORNEY</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates
                                libero possimus sapiente sint odit iusto blanditiis doloribus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-news-area">
                            <div class="news-featured-image">
                                <a href="main/index.html#">
                                    <img src="main/img/blog/1.jpg" alt="image">
                                </a>
                                <ul>
                                    <li class="active">Mar,13 2016</li>
                                    <li>
                                        <a href="main/index.html#">
                                            <i class="fa fa-user"> </i> by admin</a>
                                    </li>
                                    <li>
                                        <a href="main/index.html#">
                                            <i class="fa fa-comments-o"></i> 02 </a>
                                    </li>
                                </ul>
                            </div>
                            <h3>
                                <a href="main/index.html#">Is Going To Get Ugly ITher</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum, laborum. Commodi nostrum
                                culpa maxime provident quisquam, praesentium........</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-news-area">
                            <div class="news-featured-image">
                                <a href="main/index.html#">
                                    <img src="main/img/blog/2.jpg" alt="image">
                                </a>
                                <ul>
                                    <li class="active">Mar,13 2016</li>
                                    <li>
                                        <a href="main/index.html#">
                                            <i class="fa fa-user"> </i> by admin</a>
                                    </li>
                                    <li>
                                        <a href="main/index.html#">
                                            <i class="fa fa-comments-o"></i> 02</a>
                                    </li>
                                </ul>
                            </div>
                            <h3>
                                <a href="main/index.html#">The Bond Market Is Going</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum, laborum. Commodi nostrum
                                culpa maxime provident quisquam, praesentium........</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-news-area">
                            <div class="news-featured-image">
                                <a href="main/index.html#">
                                    <img src="main/img/blog/3.jpg" alt="image">
                                </a>
                                <ul>
                                    <li class="active">Mar,13 2016</li>
                                    <li>
                                        <a href="main/index.html#">
                                            <i class="fa fa-user"> </i> by admin</a>
                                    </li>
                                    <li>
                                        <a href="main/index.html#">
                                            <i class="fa fa-comments-o"></i> 02</a>
                                    </li>
                                </ul>
                            </div>
                            <h3>
                                <a href="main/index.html#">Get Ugly ITher Isn't A Rebound</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum, laborum. Commodi nostrum
                                culpa maxime provident quisquam, praesentium........</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Latest News Area End Here -->
        <!-- Partner Logo Area Start Here -->
        <!-- <div class="client-logo-area">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="main/index.html#">
                            <img src="main/img/client/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
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
                            <a href="contactus">Get Free Consultation</a>
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
