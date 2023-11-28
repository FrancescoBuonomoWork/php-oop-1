<?php

class Production
{
    public $title;
    public $language;
    public $rating;
    public $cast;

    function __construct($title, $language, $rating)
    {
        $this->setTitle($title);
        $this->setLanguage($language);
        $this->setRating($rating);
        $this->cast = [];
    }
    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating >= 0) {
            $this->rating = intval($rating);
        } else {
            $this->rating = 'voto non inserito o non valido';
        }
    }
    public function getRating()
    {
        return $this->rating;
    }
    public function setLanguage($language)
    {
        if (is_string($language)) {
            $this->language = $language;
        }
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function addCastMember($newCastMember)
    {
        // array_push($this->cast,$newCastMember);
        // SE il membro del cast é gia presente non devo aggiungerlo
        // var_dump(count($this->cast));
        //    var_dump($newCastMember->character);
        if (count($this->cast) > 0) {

            for ($i = 0; $i < count($this->cast); $i++) {

                if ($newCastMember->character !==  $this->cast[$i]->character) {

                    $this->cast[] = $newCastMember;
                }
            }
        } else{
            $this->cast[] = $newCastMember;
        }
    }
}
class Protagonista
{
    public $originalName;
    public $character;
    function __construct($originalName, $character)
    {
        $this->originalName = $originalName;
        $this->character = $character;
    }
}
$protagonista_ilSignoreDegliAnelli = new Protagonista('Elijah Wood', 'Frodo Baggins');
$protagonista2 = new Protagonista('gianni', 'giangi');
$ritornoAlCrimine = new Production('Ritorno Al Crimine', 'it', 8);
// $ritornoAlCrimine->title = 'Ritorno Al Crimine';
// $ritornoAlCrimine->language = 'it';
// $ritornoAlCrimine->rating = 8;
// var_dump($ritornoAlCrimine);

$ilSignoreDegliAnelli = new Production('Il Signore Degli Anelli', 'en', 9);
$ilSignoreDegliAnelli->addCastMember($protagonista_ilSignoreDegliAnelli);
$ilSignoreDegliAnelli->addCastMember($protagonista_ilSignoreDegliAnelli);
$ilSignoreDegliAnelli->addCastMember($protagonista2);
var_dump($ilSignoreDegliAnelli);

$ilCieloSopraBerlino = new Production('Il Cielo Sopra Berlino', 'de', 7);
// var_dump($ilSignoreDegliAnelli);

$movies = [
    $ritornoAlCrimine,
    $ilSignoreDegliAnelli,
    $ilCieloSopraBerlino
];
// var_dump($movies);
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