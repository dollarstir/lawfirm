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

    new Route('/about', function ($context) {
        return Viewer::view('main/aboutus.php', $context);
    }),
]);
$router->launch();
