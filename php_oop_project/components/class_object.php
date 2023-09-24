<h4 style="color: red">
    How class and object is created in Php?
</h4>

<?php
    class Person {
        public $name; //properties
        public $age; //properties

        public function personName($value){  //methods
            echo "Person's name is ".$this->name = $value;
        }

        public function personAge($value){ //methods
            echo "Person's age is ".$this->age = $value; //this holds the reference of selected object in use
        }
    }

    $person1 = new Person();

    $person1->personName("Noman"); // -> object operator
    echo "<br/>";
    $person1->personAge(25);
?>