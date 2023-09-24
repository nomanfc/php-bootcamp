<h4 style="color: red">
    Q. Why we use final keyword in Php?
    <br />
</h4>

<b> A. To disable further inheritance and Overriding.</b> <br /><br />

<?php
class UserInfo2
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

class AdminInfo2 extends UserInfo2
{
    public $type = "Admin";

    final public function display()
    {
        echo "User Name: {$this->name} Age: {$this->age} Type: {$this->type}<br/>";
    }
}

// class AdminInfo3 extends AdminInfo2
// {
//     public $type = "Student";

//     public function display()
//     {
//         echo "User Name: {$this->name} Age: {$this->age} Type: {$this->type}<br/>";
//     }
// }

$name = "Abdullah al Noman.";
$age = 25;
$type = "Super Admin";

$obj = new AdminInfo2($name, $age);
$obj->type = "Student";
$obj->display();
?>