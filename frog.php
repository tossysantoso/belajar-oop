<?php

    require_once'animal.php';

    // inheritance animals
    class frog extends Animal{
        public $bergerak = 'hop hop';

        public function jump(){
            return $this->bergerak;
        }
    }

?>