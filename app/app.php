<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";

    session_start();
    $porsche = new Car("2014 Porsche 911", 112344, 1245, "images/porsche.jpg");
    $ford = new Car("2014 Ford f450", 56892, 12465, "images/ford.jpg");
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "images/lexus.jpg");
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "images/mercedes.jpg");



    if (empty($_SESSION['list_of_cars'])) {
        $_SESSION['list_of_cars'] = array($porsche, $ford, $lexus, $mercedes);
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('car.html.twig');
    });

    $app->post("/car_form", function() use ($app) {
        return $app['twig']->render('car_form.html.twig');
    });



    return $app;

?>
