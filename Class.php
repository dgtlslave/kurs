<?php

    class Sum {

        var $x;
        var $y;

        public function __construct($x, $y){
            $this->x = $x;
            $this->y = $y;
            $this->sum($x, $y);
        }


        public function sum($x, $y){
            $sum = $x + $y;
            echo $sum;
        }

    }

?>