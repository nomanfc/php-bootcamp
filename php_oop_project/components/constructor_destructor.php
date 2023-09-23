<h4>
    __construct and __destruct in Php?
</h4>

<?php
class Car
{
    public $model;
    public $color;
    public $id;

    public function __construct($model, $color)
    {
        echo "<br/>Constructor is running..<br/>";

        $this->model = $model;
        $this->color = $color;

        echo "<br/>Model is {$this->model} and Color is {$this->color}<br/>";
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __destruct()
    {
        echo "<br/>Destructor is running..<br/>";
        if (!empty($this->id)) {
            echo "<br/>Saving in progress";
        }
    }
}

$car1 = new Car("Swift", "White");
$car1->setId(27);
unset($car1);
?>