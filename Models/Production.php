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

    public function getInfos() {
        return [
            // 'titolo' => $this->title
        ];
    }
}