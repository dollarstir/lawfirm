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

function practice()
{
    $p = fetchall('practiceareas');
    foreach ($p as $row) {
        echo '<div class="single-practice">
        <div class="single-practice-content">
            <i class="fa fa-briefcase"></i>
            <h3>
                <a href="">'.$row['title'].'</a>
            </h3>
            <p>'.substr($row['content'], 0, 100).'...</p>
            <div class="read-more">
                <a href="main/single-practice.html">Read More</a>
            </div>
        </div>
    </div>';
    }
}

function testimony($type)
{
    $t = fetchall('testimony');
    foreach ($t as $row) {
        if ($type == 1) {
            echo '<div class="single-client-area">
                <h3>
                    <a href="">'.$row['name'].'t</a>
                </h3>
                <p class="designation">'.$row['position'].'</p>
                <div class="picture">
                    <a href="">
                        <img src="yolkassets/upload/'.$row['image'].'" alt="">
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li class="disable">
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>'.$row['comment'].'</p>
            </div>';
        }
    }
}
function attorney()
{
    $a = fetchall('attorney');

    foreach ($a as $row) {
        echo '<div class="single-attorney">
        <div class="attorney-picture">
            <a href="">
                <img src="yolkassets/upload/'.$row['image'].'" alt="">
            </a>
            <div class="overlay">
                <!--<h2>
                    <a href="main/index.html#">View Bio</a>
                </h2>-->
                <div class="social-media">
                    <ul>
                        <li>
                            <a href="'.$row['facebook'].'">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['twitter'].'">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['linkedin'].'">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['skype'].'">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="attorney-content">
            <h3>
                <a href="">'.$row['name'].'</a>
            </h3>
            <p>'.$row['position'].'</p>
        </div>
    </div>';
    }
}
