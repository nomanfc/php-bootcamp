<h4 style="color: red">
    Interface in Php?
</h4>

<?php
interface School
{
    public function SchoolDisplay();
}

interface College
{
    public function CollegeDisplay();
}

interface Varsity
{
    public function VarsityDisplay();
}


class Student implements School, College, Varsity
{

    public function __construct()
    {
        $this->SchoolDisplay();
        $this->CollegeDisplay();
        $this->VarsityDisplay();
    }
    public function SchoolDisplay()
    {
        echo "This School Student<br/>";
    }

    public function CollegeDisplay()
    {
        echo "This College Student<br/>";
    }

    public function VarsityDisplay()
    {
        echo "This varsity Student<br/>";
    }
}


$obj = new Student();
?>