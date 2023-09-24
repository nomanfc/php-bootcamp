<h4 style="color: red">
    Access modifiers in Php?
</h4>

<?php
class Access_modifiers
{
    public $name = "Noman";
    private $pin = "12345";
    protected $age = "25";

    public function display()
    {
        echo "Public: {$this->name} || inside class<br/>";
        echo "Protected: {$this->age} || inside class<br/>";
        echo "Private: {$this->pin} || inside class<br/>";

    }
}

class Derived_modifiers extends Access_modifiers
{
    public function display()
    {
        echo "<br/><br/>Public: {$this->name} || derived class<br/>";
        echo "Protected: {$this->age} || derived class<br/>";
        echo "Private: ERROR || derived class<br/>";
    }
}

$obj = new Access_modifiers();
$obj->display();
$objD = new Derived_modifiers();
$objD->display();

echo "<br/><br/>Public: {$obj->name} || outside class<br/>";
echo "Private: ERROR || outside class<br/>";
echo "Protected: ERROR || outside class<br/>";


?>