<!-- 
1. Global Scope : which variable declared in the global scope only works in global scope.

2. Local Scope : which variable declared in the local scope only works in local scope.

3. Global Keyword : using global keyword we can access global variables from local functions.

4. Static variable : when a function executed all of it's variables are deleted. some times we want a local variable not to 
   be deleted. in this case we need to use Static variables.
-->

<?php

$age = 50;
function myAge(){  
    echo  $age; // This will show error message.
}

myAge();

echo $age; // This will show 50.

?>

<!-- Solution -->

<?php
$age = 50;
function myAge2(){  
    global $age; //global keyword can solve above problem
    
    $GLOBALS['age'] = 100; //we can use this also for accessing the global variable.

    echo "Inside ". $age; // This will show 50.
}

myAge2();

echo "  Outside ". $age; // This will show 50.

?>


<!-- use of Static variables -->

<?php
function myAge3(){  
    static $age = 0; //static keyword can solve above problem
    echo $age; 
    $age++;
}

myAge3();
myAge3();

?>