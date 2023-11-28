<?php

class Production {
    public $title;
    public $language;
    public $rating;

    public function setRating($rating){
        if(is_numeric($rating)&& $rating >= 0 ){
            $this->rating = intval($rating);
        } else {
            $this->rating = 'voto non inserito o non valido';
        }
    }
    function __construct($title,$language,$rating)
    {
        $this->title = $title;
        $this->language = $language;
        $this->setRating($rating);
    
        
    }
}

$ritornoAlCrimine = new Production('Ritorno Al Crimine','it',8);
// $ritornoAlCrimine->title = 'Ritorno Al Crimine';
// $ritornoAlCrimine->language = 'it';
// $ritornoAlCrimine->rating = 8;
var_dump($ritornoAlCrimine);

$ilSignoreDegliAnelli = new Production('Il Signore Degli Anelli','en',9);
var_dump($ilSignoreDegliAnelli);

$ilCieloSopraBerlino = new Production('Il Cielo Sopra Berlino','de',7);
var_dump($ilSignoreDegliAnelli);

$movies=[
    $ritornoAlCrimine,
    $ilSignoreDegliAnelli,
    $ilCieloSopraBerlino
];
var_dump($movies);
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
                        <?php
                            foreach($movies as $index => $movie ){
                                ?>
                                <ul class="card">
                                
                                <li><?php echo $movie[$title] ?></li>
                                  
                                </ul>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>