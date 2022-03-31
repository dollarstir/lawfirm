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
                                <a href="login">Login</a>
                            </li>
                            <li>
                                <a href="register">Register</a>
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
                    <a href="home">';
                        echo $logo != '' ? '<img src="yolkassets/upload/'.$logo.'" alt="logo">' : '<img src="main/img/logo.png" alt="logo">';
                   echo' </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12">
                <div class="main-menu-area">
                    <nav>
                        <ul>
                            <li class="current">
                                <a href="home">
                                    <i class="fa fa-home"></i>
                                </a>
                                
                            </li>
                            <li>
                                <a href="about">About Us</a>
                            </li>
                            <li>
                                <a href="">PRACTICE AREAS</a>
                                <ul>
                                    <li>
                                        <a href="">Family Law</a>
                                    </li>
                                    <li>
                                        <a href="">Crime Law</a>
                                    </li>
                                    <li>
                                        <a href="">Divorce Law</a>
                                    </li>
                                    <li>
                                        <a href="">Insdustrial Law</a>
                                    </li>
                                    <li>
                                        <a href="">Business Law</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="awards">Awards</a>
                            </li>
                            
                            
                            <li>
                                <a href="contactus">CONTACT US</a>
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
                                <a href="home">
                                    <i class="fa fa-home"></i>
                                </a>
                                
                            </li>
                            <li>
                                <a href="about">About Us</a>
                            </li>
                            <li>
                                <a href="">PRACTICE AREAS</a>
                                <ul>
                                    <li>
                                        <a href="">Family Law</a>
                                    </li>
                                    <li>
                                        <a href="">Crime Law</a>
                                    </li>
                                    <li>
                                        <a href="">Divorce Law</a>
                                    </li>
                                    <li>
                                        <a href="">Insdustrial Law</a>
                                    </li>
                                    <li>
                                        <a href="">Business Law</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="awards.html">Awards</a>
                            </li>
                            
                            
                            <li>
                                <a href="contactus">CONTACT US</a>
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
