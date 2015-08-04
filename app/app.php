<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cd.php";

    $app = new Silex\application();

    $app->get("/", function() {
        $first_cd = new CD ("Master of Reality", "Black Sabbath", "images/reality.jpg", 10.99);
        $second_cd = new CD ("Electric Ladyland", "Jimi Hendrix", "images/ladyland.jpg", 10.99);
        $third_cd = new CD ("Nevermind", "Nirvana", "images/nevermind.jpg", 10.99);
        $fourth_cd = new CD ("I don't get it", "Pork Loin", "images/porkloin.jpg", 49.99);
        $cds = array($first_cd, $second_cd, $third_cd, $fourth_cd);


        $output = "";
        foreach ($cds as $album) {
            $output = $output . "<div class='row'>
                <div class='col-md-3'>
                <img class='img-responsive' src=" . $album->getCoverArt() . ">
                </div>
                <div class='col-md-9'>
                    <p>". $album->getTitle() . "</p>
                    <p>By " . $album->getArtist() . "</p>
                    <p>$" . $album->getPrice() . "</p>
                </div>
            </div>
            ";
        }
        return "<DOCTYPE html>
                <html>
                <head>
                <title>Our Car store</title>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
                </head>
                <body>
                <div class='container'>" . $output . "
                </div>
                </body>
                </html>"
                ;
    });

    return $app;
 ?>
