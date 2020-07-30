<?php
    require_once 'animal.php';


    //inheritance Animal
    class ape extends Animal{
        public $bersuara = 'Auooo';

        public function yell(){
           return $this->bersuara;
        }


    }

?>