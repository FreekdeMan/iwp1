<?php
/*
 *  A class for a Person, containing first name, last name and city
 */
class Person{
    public $first_name;
    public $last_name;
    public $city;
    
    /**
     * 
     * @param type $f The first name of the person
     * @param type $l The last name of the person
     * @param type $c The city the person lives in. 
     */
    function __construct($f=null, $l=null, $c=null){
        $this->first_name = $f;
        $this->last_name = $l;
        $this->city = $c;
    }
    
    /**
     * 
     * @return string containing the first and last name of the person
     */
    function show_name(){
        return $this->first_name . " " . $this->last_name;
    }
}

