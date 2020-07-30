<?php

    require_once'animal.php';

    // create class inheritance
    // inheritance animals
    class frog extends Animal{
        public $bergerak = 'hop hop';

        public function jump(){
            return $this->bergerak;
        }
    }

?>