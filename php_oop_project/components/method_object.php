<?php
include "handler_functions/calculation.php"
?>

<h4 style="color: red">
    Work with method and object in Php?
</h4>

<form action="" method="post" style="width: 290px">
    <label for="num1">Number 1:</label>
    <input type="number" id="num1" name="num1">
    <br>
    <br>
    <label for="num2">Number 2:</label>
    <input type="number" id="num2" name="num2">
    <br>
    <br>
    <input style="width: 100%;" type="submit" value="Calculate" name="calculation">
</form>

<?php
if (isset($_POST["calculation"])) {
    $value1 = $_POST["num1"];
    $value2 = $_POST["num2"];

    if (empty($value1) or empty($value2)) {
        echo '<p style="color: red;">Please Fill Every Inputs</p>';
    } else {
        echo "<br/>First Number: " . $value1;
        echo "<br/>Second Number: " . $value2 . "<br/>";

        $obj = new Calculation();

        $obj->add($value1, $value2);
        $obj->sub($value1, $value2);
        $obj->mul($value1, $value2);
        $obj->div($value1, $value2);
    }
}
?>