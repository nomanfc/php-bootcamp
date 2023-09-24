<h4 style="color: red">
    How to access constant with scope resolution (::) in Php?
</h4>

<?php
class ConstantProperty
{
    const NAME = "Abdullah Al-Noman";


    public function display()
    {
        echo "Accessing constant with display method (class_name::constant_name): " . ConstantProperty::NAME . "<br/>";
        echo "Accessing constant with display method (self::constant_name): " . self::NAME . "<br/>";
    }
}


$obj = new ConstantProperty();
echo "<b>Inside Class</b> <br/>";
$obj->display();
echo "<b>Outside Class</b>";
echo "<br/>Accessing constant with object (obj_name::constant_name): " . $obj::NAME . "<br/>";
echo "Accessing constant directly from class without object (class_name::constant_name): " . ConstantProperty::NAME . "<br/>";


?>