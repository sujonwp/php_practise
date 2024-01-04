<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cell = "01988056769";

    function address(){


        global $cell;
        echo $cell;

        echo "<br>";

        echo $GLOBALS['cell'];

    }

    address();
    
    
    
    ?>
</body>
</html>