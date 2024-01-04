<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions</title>
</head>
<body>

    <?php

    // preg_match() function

    $koma = "Hello Bangladesh";
    $pattern = "/Ng/i";

    echo preg_match($pattern, $koma);

    echo "<br>";



    // preg_match_all() function

    $str = "Hello World. Hello Bangladesh";
    $pattern = "/he/i";

    echo preg_match_all($pattern, $str);

    echo "<br>";

    // preg_replace() function

    $name = "Hello There, How are you?";
    $pattern = "/Hello/i";
    $replace = "Hi";

    echo preg_replace($pattern, $replace, $name);




    ?>
</body>
</html>