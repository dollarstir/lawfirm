<?php

$a = new Sel();
$response = $a->getall('settings');
$footer = $response[0]['footertext'];
echo '   <footer>
<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-one">
                    <h2>About Us</h2>
                    <p>Thereare aswrta serttrmany variations of passages of Lorem Ipsum available, but the majority
                        have suffered setyu..</p>
                    <p>Thereare aswrta serttrmany variations of passages of Lorem Ipsum available.</p>
                    <div class="social-media">
                        <ul>
                            <li>
                                <a href="main/index.html#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="main/index.html#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="main/index.html#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="main/index.html#">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-two">
                    <h2>Explore Our Work</h2>
                    <ul>
                        <li>
                            <a href="main/index.html#">Criminal law</a>
                        </li>
                        <li>
                            <a href="main/index.html#">Accident law</a>
                        </li>
                        <li>
                            <a href="main/index.html#">Devorce law</a>
                        </li>
                        <li>
                            <a href="main/index.html#">Industrial law</a>
                        </li>
                        <li>
                            <a href="main/index.html#">Business law</a>
                        </li>
                        <li>
                            <a href="main/index.html#">Familly law</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-three">
                    <h2>Keep in Touch</h2>
                    <ul>
                        <li>
                            <i class="fa fa-clock-o"></i> Sat-Mon</li>
                        <li>
                            <i class="fa fa-map-marker"></i> 150 Torrent Court Street, UK</li>
                        <li>
                            <i class="fa fa-phone"></i> (123) 00 8888 999</li>
                        <li>
                            <i class="fa fa-envelope-o"></i> info@miakolwfirm.com</li>
                        <li>
                            <i class="fa fa-fax"></i> (123) 00 8888 999</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-four">
                    <h2>flickr GALLERY</h2>
                    <ul>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/1.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/2.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/3.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/1.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/2.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/3.jpg" alt=""> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-buttom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-buttom">
                    <div class="scrollup">
                        <a href="main/index.html#">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                    <p> Copyright &copy; '.date('Y').'  '.$footer.' All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>';
