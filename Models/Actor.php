<?php 

class Actor
{
    public $originalName;
    public $character;
    function __construct($originalName, $character)
    {
        $this->originalName = $originalName;
        $this->character = $character;
    }
}