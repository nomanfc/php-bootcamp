<h4 style="color: red">
    unset properties in __destruct in Php?
</h4>

<?php
class PersonDetails
{
    public $name;
    public $age;

    public function __construct($userName, $age)
    {
        $this->name = $userName;
        $this->age = $age;

        echo "<br/>{$this->name} is {$this->age} years old.<br/>";
    }

    /**Destructor executed at the last. So it is safe to unset the properties in destructor */
    public function __destruct()
    {
        unset($this->name);
        unset($this->age);
    }
}

$name = "Abdullah Al-Noman";
$age = 25;

$person1 = new PersonDetails($name, $age);

?>