<?php

class Production {
    public $title;
    public $language;
    public $rating;

    public function setRating($rating){
        if(is_numeric($rating)&& $rating >= 0 ){
            $this->rating = intval($rating);
        } else {
            $this->rating = 'voto non inserito';
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