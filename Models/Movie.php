<?php 
require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Actor.php';

class Movie extends Production {
    protected $profit;
    protected $duration;

    function __construct($title, $language, $rating,$profit,$duration)
    {
        parent::__construct($title, $language, $rating);
        $this-> setProfit($profit);
        $this-> setDuration($duration);
    }

    public function setProfit($profit){
        if(is_numeric($profit)) {
            $this->profit = intval($profit);
        }
    }
    public function getProfit(){
        return $this->profit;
    }

    public function setDuration($duration){
        if(is_numeric($duration)) {
            $this->duration = intval($duration);
        }
    }
    public function getDuration(){
        return $this->duration;
    }




}