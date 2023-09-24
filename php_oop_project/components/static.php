<h4 style="color: red">
    static method and property in Php?
</h4>

<?php
class StaticPro{
    public $name = "Noman";
    public static $age = "25";

    public static function display(){
        echo "My name is ".self::$age;
    } 

}

$ob1 = new StaticPro();

StaticPro::display();
?>