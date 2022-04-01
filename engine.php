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
    new Route('/adminhome', function ($context) {
        return Viewer::view('main/firm/main.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/addpractice', function ($context) {
        return Viewer::view('main/firm/newpractice.php', $context);
    }),

    new Route('/addawards', function ($context) {
        return Viewer::view('main/firm/newawards.php', $context);
    }),

    new Route('/addtestimoney', function ($context) {
        return Viewer::view('main/firm/newtest.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/editceo', function ($context) {
        return Viewer::view('main/firm/newceo.php', $context);
    }),

    new Route('/editabout', function ($context) {
        return Viewer::view('main/firm/newabout.php', $context);
    }),

    new Route('/addattorney', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/newattorney.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),
]);
$router->launch();
