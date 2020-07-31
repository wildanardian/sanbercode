<?php

    class Ape extends Animal{
        public $yell = "Auooo";

        function __construct($name){
            $this->name = $name;
            $this->legs = 2;
            $this->cold_blooded = false;
        }

        function yell(){
            $this->$yell;
        }

    }

?>