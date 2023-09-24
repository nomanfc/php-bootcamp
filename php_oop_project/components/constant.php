<h4 style="color: red">
    How to access constant with scope resolution (::)  in Php?
</h4>

<?php
class ConstantProperty {
    const NAME = "Abdullah Al-Noman";


    public function display(){
        echo "Accessing constant with display method (class_name::constant_name): ".ConstantProperty::NAME."<br/>";
        echo "Accessing constant with display method (self::constant_name): ".self::NAME."<br/>";
    }
}


$obj = new ConstantProperty();

$obj->display();

echo "Accessing constant with object: ".$obj::NAME."<br/>";

?>