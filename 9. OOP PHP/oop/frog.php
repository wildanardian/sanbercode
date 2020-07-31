<?php

    class Frog extends Animal{
        public $jump = "hop hop";

        function __construct($name){
            $this->name = $name;
            $this->legs = 4;
            $this->cold_blooded = true;
        }

        function jump(){
            echo $this->jump;
        }
    }

?>