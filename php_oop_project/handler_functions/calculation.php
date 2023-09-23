<?php
    class calculation{
        public function add($a, $b){
            echo "<br/>1. Addition is: ".$a+$b."<br/>";
        }
        public function sub($a, $b){
            echo "2. Subtraction is: ".$a-$b."<br/>";
        }
        public function mul($a, $b){
            echo "3. Multiplication is: ".$a*$b."<br/>";
        }
        public function div($a, $b){
            echo "4. Division is: ".$a/$b."<br/>";
        }
    }
