<?php

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/Actor.php';
require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/Serie.php';

$protagonista_ilSignoreDegliAnelli = new Actor('Elijah Wood', 'Frodo Baggins');
$protagonista2 = new Actor('gianni', 'giangi');
$ritornoAlCrimine = new Production('Ritorno Al Crimine', 'it', 8);
// $ritornoAlCrimine->title = 'Ritorno Al Crimine';
// $ritornoAlCrimine->language = 'it';
// $ritornoAlCrimine->rating = 8;
// var_dump($ritornoAlCrimine);

$ilSignoreDegliAnelli = new Production('Il Signore Degli Anelli', 'en', 9);
$ilSignoreDegliAnelli->addCastMember($protagonista_ilSignoreDegliAnelli);
$ilSignoreDegliAnelli->addCastMember($protagonista_ilSignoreDegliAnelli);
$ilSignoreDegliAnelli->addCastMember($protagonista2);
// var_dump($ilSignoreDegliAnelli);

$ilCieloSopraBerlino = new Production('Il Cielo Sopra Berlino', 'de', 7);
// var_dump($ilSignoreDegliAnelli);

$movies = [
    $ritornoAlCrimine,
    $ilSignoreDegliAnelli,
    $ilCieloSopraBerlino
];
// var_dump($movies);
// -------------------------------------------
$movie1 = new Movie('smetto quando voglio','it',8, 50 , 100);
$movie2 = new Movie('joker','en',8, 1,120);
$movie3 = new Movie('oppenheimer','en',9, 10,160);
$movie4 = new Movie('barbie','en',6, 10,120);
$movie5 = new Movie('Jumanji','en',9, 7,140);
// var_dump($movie1);
$serie1 = new Serie('chicago fire','en',7 ,1);
$serie2 = new Serie('attack on titan','jp',10,4);
$serie3 = new Serie('the big bang theory','en',7 ,5);
$serie4 = new Serie('the mentalist','en',8 ,2);
$serie5 = new Serie('how i meet your mother','en',9 ,6);

$productions = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5
];

var_dump($productions);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div>
        <!-- <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php foreach ($movies as $index => $movie) { ?>
                            <ul class="card">

                                <li><?php echo $movie->title ?></li>
                                <li><?php echo $movie->language ?></li>
                                <li><?php echo $movie->rating ?></li>    
                                
                            </ul>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section> -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php foreach ($productions as $index => $production) { ?>
                            <ul class="card">

                                <li><?php echo $production->title ?></li>
                                <li><?php echo $production->language ?></li>
                                <li><?php echo $production->rating ?></li>    
                                <?php   ?>
                                <?php  ?>
                            </ul>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>