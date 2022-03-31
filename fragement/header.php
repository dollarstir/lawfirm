<?php

$a = new Sel();
$response = $a->getall('settings');
$pe = $a->getall('contact');
$title = $response[0]['appname'];
$logo = $response[0]['logo'];
$favicon = $response[0]['favicon'];

echo '  <head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Welcome | 404 Page </title>
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
</head>';
