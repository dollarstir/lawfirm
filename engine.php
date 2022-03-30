<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
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

    new Route('/chat', function ($context) {
        return Viewer::view('ab.html', $context);
    }),
]);
$router->launch();
