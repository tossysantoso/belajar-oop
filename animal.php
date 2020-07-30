<?php

//cara membuat class
//class animal
class Animal{
    //properti
    public $legs;
    public $cold_blooded;
    public $name;
    
    //methode construct
    public function __construct($name)
    {
        $this->name = $name;
    }

    //methode set
    public function set_legs($legs){
        $this->legs = $legs;
    }

    //methode get
    public function get_legs(){
        return $this->legs;
    }

    //methode set
    public function set_coldBlooded($cold_blooded){
        $this->cold_blooded = $cold_blooded;
    }

    //methode get
    public function get_coldBlooded(){
        return $this->cold_blooded;
    }
}

?>