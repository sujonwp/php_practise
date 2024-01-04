<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Scope</title>
</head>
<body>

    <?php

    /*

    PHP has three different variable scopes:

    1) local
    2) global
    3) static

    */

    // Global Scope

    $myDream = "Full Stack Developer"; // Global Scope
    $learn = "Javascript and Php"; // Clobal Scope
    

    // Local Scope

    function Address(){

        $personName = "Sujon WP";
        $fbLink = "fb/sujonnwp";
    }


    ?>
</body>
</html>