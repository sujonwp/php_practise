<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <?php

    //php has 8 types of data types.

    // 1. String
    // 2. Integer
    // 3. Float (floating point numbers - also called double)
    // 4. Boolean
    // 5. Array
    // 6. Object
    // 7. NULL
    // 8. Resource

    // PHP String

    $x = "Hello world!";
    $y = 'Hello world!';


    // PHP Integer

    // An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    $salary = 500;
    $age = 25;

    var_dump($salary);
     

    //PHP Float

    #A float (floating point number) is a number with a decimal point or a number in exponential form.

    $price = 20.66;
    var_dump($price);


    //PHP Boolean

    #A Boolean represents two possible states: TRUE or FALSE.

    $x = true;
    var_dump($x);

    //PHP Array
    #An array stores multiple values in one single variable.

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);




    ?>


</body>
</html>