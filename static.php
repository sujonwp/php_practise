<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function number(){

        static $qyt = 1;
        echo $qyt. "<br>";
        $qyt+=1;

    }

    number();
    number();
    number();


    function MyNumber(){

        static $qyt = 2;
        echo $qyt. "<br>";
        $qyt+=1;

    }

    MyNumber();
    MyNumber();
    MyNumber();


    function MyNewNumber(){
        static $qyt = 4;
        echo $qyt. "<br>";
        $qyt+=1;
    }


    MyNewNumber();
    MyNewNumber();
    MyNewNumber();



    
    
    
    
    
    ?>
</body>
</html>