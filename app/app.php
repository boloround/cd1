<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\application();

    $app->get("/", function() {
        return "Home";
    });

    return $app;
 ?>
