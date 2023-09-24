<h4 style="color: red">
    Inheritance in Php?
</h4>

<?php
class UserInfo
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        echo "User Name: {$this->name} Age: {$this->age} <br/>";
    }
}

class AdminInfo extends UserInfo
{
    public $type = "Admin";

    public function display()
    {
        echo "User Name: {$this->name} Age: {$this->age} Type: {$this->type}<br/>";
    }
}

$name = "Abdullah al Noman.";
$age = 25;
$type = "Super Admin";

$obj = new AdminInfo($name, $age);
$obj->type = "Staff";
$obj->display();
?>