<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/main.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('main/main.php', $context);
        }
    ),
    new Route('/about', function ($context) {
        return Viewer::view('main/aboutus.php', $context);
    }),

    new Route('/contactus', function ($context) {
        return Viewer::view('main/contactpage.php', $context);
    }),

    new Route('/awards', function ($context) {
        return Viewer::view('main/awardlist.php', $context);
    }),

    new Route('/adminauth', function ($context) {
        return Viewer::view('main/firm/login.php', $context);
    }),
]);
$router->launch();
