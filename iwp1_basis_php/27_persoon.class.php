<?php
class Persoon{
    public $voornaam;
    public $achternaam;
    public $woonplaats;
    
    function __construct($v=null, $a=null, $w=null){
        $this->voornaam = $v;
        $this->achternaam = $a;
        $this->woonplaats = $w;
    }
    
    function toonNaam(){
        return $this->voornaam . " " . $this->achternaam;
    }
}

