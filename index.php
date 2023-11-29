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
$movie = new Movie('smetto quando voglio','it',8, 50 , 70);
var_dump($movie);
$serie1 = new Serie('chicago fire','en',8 ,1);
var_dump($serie1);
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
        <section>
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
        </section>
    </div>
</body>

</html>