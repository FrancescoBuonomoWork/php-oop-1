<?php
require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Actor.php';

class Serie extends Production
{
    protected $season;

    function __construct($title, $language, $rating, $season)
    {
        parent::__construct($title, $language, $rating);
        $this->setSeason($season);
    }
    public function setSeason($season)
    {
        if (is_numeric($season)) {
            $this->season = intval($season);
        }
    }
    public function getSeason()
    {
        return $this->season;
    }

    public function getInfos() {
        return [
            // 'titolo' => $this->title,
            'season' => $this->season
        ];
    }
}
