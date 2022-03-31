<?php

$a = new Sel();
$response = $a->getall('settings');
$pe = $a->getall('contact');
$title = $response[0]['appname'];
$logo = $response[0]['logo'];
$favicon = $response[0]['favicon'];

echo '  <header>
<div class="header-area-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                <div class="header-top-left">
                    <p>
                        <i class="fa fa-map-marker"></i>'.$pe[0]['address'].'</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                <div class="header-top-right">
                    <nav>
                        <ul>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="registration.html">Register</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-sm-12">
                <div class="logo-area">
                    <a href="index.html">
                        <img src="main/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12">
                <div class="main-menu-area">
                    <nav>
                        <ul>
                            <li class="current">
                                <a href="404.html#">
                                    <i class="fa fa-home"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="index.html">Home Page 1</a>
                                    </li>
                                    <li>
                                        <a href="index1.html">Home Page 2</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Home Page 3</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Home Page 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="practice.html">PRACTICE AREAS</a>
                                <ul>
                                    <li>
                                        <a href="single-practice.html">Family Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice-left-sidebar.html">Crime Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice.html">Divorce Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice-left-sidebar.html">Insdustrial Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice.html">Business Law</a>
                                    </li>
                                    <li class="has-child-menu">
                                        <a href="404.html#">Demo</a>
                                        <ul class="thired-level">
                                            <li>
                                                <a href="404.html#">Demo 1</a>
                                            </li>
                                            <li>
                                                <a href="404.html#">Demo 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="awards.html">Awards</a>
                            </li>
                            <li>
                                <a href="blog.html">BLOG</a>
                                <ul>
                                    <li>
                                        <a href="single.html">Single Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="404.html#">Pages</a>
                                <ul class="mega-menu-style1">
                                    <li>
                                        <a href="index.html">Home Page 1</a>
                                        <a href="index1.html">Home Page 2</a>
                                        <a href="index2.html">Home Page 3</a>
                                        <a href="index3.html">Home Page 4</a>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="practice.html">PRACTICE AREAS</a>
                                        <a href="single-practice.html">Family Law</a>
                                        <a href="single-practice-left-sidebar.html">Crime Law</a>
                                        <a href="awards.html">Awards</a>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="single.html">Single Blog</a>
                                        <a href="single-attorney.html">Attorney Details</a>
                                        <a href="404.html">404 Page</a>
                                        <a href="login.html">Login</a>
                                        <a href="registration.html">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">CONTACT US</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-sm col-sm-12">
                <div class="search-area">
                    <span>
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" placeholder="Search Here....">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="current">
                                <a href="404.html#">
                                    <i class="fa fa-home"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="index.html">Home Page 1</a>
                                    </li>
                                    <li>
                                        <a href="index1.html">Home Page 2</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Home Page 3</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Home Page 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="practice.html">PRACTICE AREAS</a>
                                <ul>
                                    <li>
                                        <a href="single-practice.html">Family Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice.html">Crime Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice.html">Divorce Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice.html">Insdustrial Law</a>
                                    </li>
                                    <li>
                                        <a href="single-practice.html">Business Law</a>
                                    </li>
                                    <li>
                                        <a href="404.html#">Demo</a>
                                        <ul>
                                            <li>
                                                <a href="404.html#">Demo 1</a>
                                            </li>
                                            <li>
                                                <a href="404.html#">Demo 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="awards.html">Awards</a>
                            </li>
                            <li>
                                <a href="blog.html">BLOG</a>
                                <ul>
                                    <li>
                                        <a href="single.html">Single Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="404.html#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="index.html">Home Page 1</a>
                                    </li>
                                    <li>
                                        <a href="index1.html">Home Page 2</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Home Page 3</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Home Page 4</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="practice.html">PRACTICE AREAS</a>
                                    </li>
                                    <li>
                                        <a href="awards.html">Awards</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="single.html">Single Blog</a>
                                    </li>
                                    <li>
                                        <a href="single-attorney.html">Attorney Details</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404 Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="registration.html">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">CONTACT US</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
</header>';
